<?php

namespace ContainerHZNEvKk;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder853cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5a2e7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc2a3c = [
        
    ];

    public function getConnection()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getConnection', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getMetadataFactory', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getExpressionBuilder', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'beginTransaction', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getCache', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'transactional', array('func' => $func), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'commit', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->commit();
    }

    public function rollback()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'rollback', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'createQuery', array('dql' => $dql), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'createQueryBuilder', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'flush', array('entity' => $entity), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'clear', array('entityName' => $entityName), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->clear($entityName);
    }

    public function close()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'close', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->close();
    }

    public function persist($entity)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'persist', array('entity' => $entity), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'remove', array('entity' => $entity), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'refresh', array('entity' => $entity), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'detach', array('entity' => $entity), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'merge', array('entity' => $entity), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'contains', array('entity' => $entity), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getEventManager', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getConfiguration', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'isOpen', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getUnitOfWork', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getProxyFactory', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'getFilters', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'isFiltersStateClean', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'hasFilters', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return $this->valueHolder853cd->hasFilters();
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

        $instance->initializer5a2e7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder853cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder853cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder853cd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, '__get', ['name' => $name], $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        if (isset(self::$publicPropertiesc2a3c[$name])) {
            return $this->valueHolder853cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder853cd;

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

        $targetObject = $this->valueHolder853cd;
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
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder853cd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder853cd;
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
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, '__isset', array('name' => $name), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder853cd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder853cd;
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
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, '__unset', array('name' => $name), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder853cd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder853cd;
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
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, '__clone', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        $this->valueHolder853cd = clone $this->valueHolder853cd;
    }

    public function __sleep()
    {
        $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, '__sleep', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;

        return array('valueHolder853cd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5a2e7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5a2e7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5a2e7 && ($this->initializer5a2e7->__invoke($valueHolder853cd, $this, 'initializeProxy', array(), $this->initializer5a2e7) || 1) && $this->valueHolder853cd = $valueHolder853cd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder853cd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder853cd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
