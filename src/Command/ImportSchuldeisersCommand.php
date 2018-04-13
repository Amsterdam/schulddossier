<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use Doctrine\ORM\EntityRepository;

class ImportSchuldeisersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('app:import:schuldeiser');
        $this->addArgument('fieldList', InputArgument::REQUIRED, 'Volgorde van de kolommen gescheiden met komma\'s, de volgende kolommen moeten worden gedefinieerd: bedrijfsnaam,rekening,allegroCode,straat,huisnummer,huisnummerToevoeging,postcode,plaats,opmerkingen');
        $this->addArgument('file', InputArgument::REQUIRED, 'Locatie van CSV bestand');
        $this->addOption('skipFirstRow', null, InputOption::VALUE_NONE);
        $this->addOption('semicolon', null, InputOption::VALUE_NONE);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $delimiter = $input->getOption('semicolon') ? ';' : ',';

        $expectedFields = ['bedrijfsnaam', 'rekening', 'allegroCode', 'straat', 'huisnummer', 'huisnummerToevoeging', 'postcode', 'plaats', 'opmerkingen'];
        $fieldList = explode(',', $input->getArgument('fieldList'));
        foreach ($expectedFields as $expectedField) {
            if (in_array($expectedField, $fieldList) === false) {
                $output->writeln('Veld: ' . $expectedField . 'mist in veldenlijst');
            }
        }

        $f = fopen($input->getArgument('file'), 'r');
        $i = 0;
        while($row = fgetcsv($f, null, $delimiter)) {
            $i ++;
            $output->writeln('Start line: ' . $i);
            if ($i === 1 && $input->getOption('skipFirstRow')) {
                $output->writeln('Skip first line');
                continue;
            }

            $data = [];
            foreach ($expectedFields as $expectedField) {
                $data[$expectedField] = $row[array_search($expectedField, $fieldList)];
            }
            $output->writeln('Line parsed: ' . json_encode($data));

            $schuldeiser = $this->getOrCreateSchuldeiser($data['allegroCode']);
            $output->writeln('Object id: ' . $schuldeiser->getId());

            $this->mapData($data, $schuldeiser);
        }
        fclose($f);

        $this->getContainer()->get('doctrine')->getManager()->flush();
    }

    private function getOrCreateSchuldeiser($allegroCode)
    {
        /** @var $repo EntityRepository */
        $repo = $this->getContainer()->get('doctrine')->getManager()->getRepository(Schuldeiser::class);
        $qb = $repo->createQueryBuilder('schuldeiser');
        $qb->andWhere('schuldeiser.allegroCode = :allegroCode');
        $qb->setParameter('allegroCode', $allegroCode);
        $result = $qb->getQuery()->execute();
        if (count($result) === 0) {
            $new = new Schuldeiser();
            $this->getContainer()->get('doctrine')->getManager()->persist($new);
            return $new;
        }
        return reset($result);
    }

    private function mapData($data, Schuldeiser $object)
    {
        $object->setAllegroCode($data['allegroCode']);
        $object->setBedrijfsnaam($data['bedrijfsnaam']);
        $object->setHuisnummer($data['huisnummer']);
        $object->setHuisnummerToevoeging($data['huisnummerToevoeging']);
        $object->setOpmerkingen($data['opmerkingen']);
        $object->setPlaats($data['plaats']);
        $object->setPostcode($data['postcode']);
        $object->setRekening($data['rekening']);
        $object->setStraat($data['straat']);
    }
}