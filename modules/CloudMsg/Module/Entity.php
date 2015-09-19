    public function onEntityRepositoryInit()
    {
        $repository = $this->app->module->Entity->repository;
        
        $repository('CloudMsg', function() use ($repository) {
            return $repository->CloudMsg = new Module\Entity\Repository\CloudMsg();
        });
    }
