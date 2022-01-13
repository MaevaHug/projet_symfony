<?php

namespace ContainerL4pjjlc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderca3ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer364df = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesffafd = [
        
    ];

    public function getConnection()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getConnection', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getMetadataFactory', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getExpressionBuilder', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'beginTransaction', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getCache', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getCache();
    }

    public function transactional($func)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'transactional', array('func' => $func), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'commit', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->commit();
    }

    public function rollback()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'rollback', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getClassMetadata', array('className' => $className), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'createQuery', array('dql' => $dql), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'createNamedQuery', array('name' => $name), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'createQueryBuilder', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'flush', array('entity' => $entity), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'clear', array('entityName' => $entityName), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->clear($entityName);
    }

    public function close()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'close', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->close();
    }

    public function persist($entity)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'persist', array('entity' => $entity), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'remove', array('entity' => $entity), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'refresh', array('entity' => $entity), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'detach', array('entity' => $entity), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'merge', array('entity' => $entity), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'contains', array('entity' => $entity), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getEventManager', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getConfiguration', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'isOpen', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getUnitOfWork', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getProxyFactory', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'initializeObject', array('obj' => $obj), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'getFilters', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'isFiltersStateClean', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'hasFilters', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return $this->valueHolderca3ea->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer364df = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderca3ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderca3ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderca3ea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, '__get', ['name' => $name], $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        if (isset(self::$publicPropertiesffafd[$name])) {
            return $this->valueHolderca3ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3ea;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderca3ea;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3ea;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderca3ea;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, '__isset', array('name' => $name), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3ea;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderca3ea;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, '__unset', array('name' => $name), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca3ea;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderca3ea;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, '__clone', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        $this->valueHolderca3ea = clone $this->valueHolderca3ea;
    }

    public function __sleep()
    {
        $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, '__sleep', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;

        return array('valueHolderca3ea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer364df = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer364df;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer364df && ($this->initializer364df->__invoke($valueHolderca3ea, $this, 'initializeProxy', array(), $this->initializer364df) || 1) && $this->valueHolderca3ea = $valueHolderca3ea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderca3ea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderca3ea;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
