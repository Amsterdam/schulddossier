<?php

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

    /**
     * @param string $env
     * @param string $path
     */
    public function __construct($env, $path)
    {
        $this->env = $env;
        $this->path = $path;
    }

    public function getEnv()
    {
        return $this->env;
    }

    public static function getEnvVersion($env, $path)
    {
        if ($env === 'dev') {
            return 'dev-' . date('YmdHis');
        } else {
            return $env . '-' . (new self($env, $path))->getVersionId();
        }
    }

    public function getVersionFile()
    {
        $versionFile = $this->path . DIRECTORY_SEPARATOR . 'version_file';
        if ($this->env === 'dev') {
            $versionFile = $this->path . DIRECTORY_SEPARATOR . '.git/refs/heads/master';
        }
        return $versionFile;
    }

    public function getVersionId()
    {
        $versionFile = self::getVersionFile();
        if (file_exists($versionFile)) {
            return trim(file_get_contents($versionFile));
        } else {
            return '0000';
        }
    }

    public function getVersionDate()
    {
        $versionFile = self::getVersionFile();
        if (file_exists($versionFile)) {
            $versionFile = self::getVersionFile();
            return date("d-M-Y", filemtime($versionFile));
        }
        return '';
    }
}