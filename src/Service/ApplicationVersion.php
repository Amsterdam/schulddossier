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
     * @param string  $path
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

    public function getEnvVersion()
    {
        if ($this->env === 'dev') {
            return 'dev-' . date('YmdHis');
        } else {
            return $this->env . '-' . $this->getVersionId();
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
        $versionFile = $this->getVersionFile();
        if (file_exists($versionFile)) {
            return substr(trim(file_get_contents($versionFile)), 0, 7);
        } else {
            return '0000';
        }
    }
    public function getVersionDate()
    {
        $versionFile = $this->getVersionFile();
        if (file_exists($versionFile)) {
            $versionFile = $this->getVersionFile();
            return date ("y-m-d", filemtime($versionFile));
        }
        return '';
    }
}