<?php
declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

class ApplicationVersion
{
    /**
     * @var string
     */
    protected $env;

    /**
     * @var string
     */
    protected $path;

    public function __construct(string $env, string $path)
    {
        $this->env = $env;
        $this->path = $path;
    }

    public function getEnv(): string
    {
        return $this->env;
    }

    public function getEnvVersion(): string
    {
        if ($this->env === 'dev') {
            return 'dev-' . date('YmdHis');
        }

        return $this->env . '-' . $this->getVersionId();
    }

    private function getVersionFile(): string
    {
        if ($this->env === 'dev') {
            return $this->path . DIRECTORY_SEPARATOR . '.git/refs/heads/master';
        }

        return $this->path . DIRECTORY_SEPARATOR . 'version_file';
    }

    public function getVersionId(): string
    {
        $versionFile = $this->getVersionFile();
        if (file_exists($versionFile)) {
            return substr(trim(file_get_contents($versionFile)), 0, 7);
        }

        return '0000';
    }

    public function getVersionDate(): string
    {
        $versionFile = $this->getVersionFile();
        if (file_exists($versionFile)) {
            return date ('y-m-d', filemtime($versionFile));
        }

        return '';
    }
}
