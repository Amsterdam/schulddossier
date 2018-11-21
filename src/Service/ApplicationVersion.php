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

    public function getVersionId()
    {
        $versionFile = $this->path . DIRECTORY_SEPARATOR . '.git/refs/heads/master';
        if (file_exists($versionFile)) {
            return substr(trim(file_get_contents($versionFile)), 0, 7);
        } else {
            return '0000';
        }
    }
}