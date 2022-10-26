<?php

namespace ContainerDifyfuc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3cf8e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer05c50 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf28cc = [
        
    ];

    public function getConnection()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getConnection', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getMetadataFactory', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getExpressionBuilder', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'beginTransaction', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getCache', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'transactional', array('func' => $func), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'commit', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->commit();
    }

    public function rollback()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'rollback', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getClassMetadata', array('className' => $className), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'createQuery', array('dql' => $dql), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'createNamedQuery', array('name' => $name), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'createQueryBuilder', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'flush', array('entity' => $entity), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'clear', array('entityName' => $entityName), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->clear($entityName);
    }

    public function close()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'close', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->close();
    }

    public function persist($entity)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'persist', array('entity' => $entity), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'remove', array('entity' => $entity), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'refresh', array('entity' => $entity), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'detach', array('entity' => $entity), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'merge', array('entity' => $entity), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'contains', array('entity' => $entity), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getEventManager', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getConfiguration', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'isOpen', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getUnitOfWork', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getProxyFactory', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'initializeObject', array('obj' => $obj), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'getFilters', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'isFiltersStateClean', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'hasFilters', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return $this->valueHolder3cf8e->hasFilters();
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

        $instance->initializer05c50 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3cf8e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3cf8e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3cf8e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, '__get', ['name' => $name], $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        if (isset(self::$publicPropertiesf28cc[$name])) {
            return $this->valueHolder3cf8e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3cf8e;

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

        $targetObject = $this->valueHolder3cf8e;
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
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3cf8e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3cf8e;
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
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, '__isset', array('name' => $name), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3cf8e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3cf8e;
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
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, '__unset', array('name' => $name), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3cf8e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3cf8e;
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
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, '__clone', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        $this->valueHolder3cf8e = clone $this->valueHolder3cf8e;
    }

    public function __sleep()
    {
        $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, '__sleep', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;

        return array('valueHolder3cf8e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer05c50 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer05c50;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer05c50 && ($this->initializer05c50->__invoke($valueHolder3cf8e, $this, 'initializeProxy', array(), $this->initializer05c50) || 1) && $this->valueHolder3cf8e = $valueHolder3cf8e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3cf8e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3cf8e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
