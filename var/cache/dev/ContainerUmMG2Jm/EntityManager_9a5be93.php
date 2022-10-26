<?php

namespace ContainerUmMG2Jm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf808 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerec82c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0d06d = [
        
    ];

    public function getConnection()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getConnection', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getMetadataFactory', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getExpressionBuilder', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'beginTransaction', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getCache', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getCache();
    }

    public function transactional($func)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'transactional', array('func' => $func), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'wrapInTransaction', array('func' => $func), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'commit', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->commit();
    }

    public function rollback()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'rollback', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getClassMetadata', array('className' => $className), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'createQuery', array('dql' => $dql), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'createNamedQuery', array('name' => $name), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'createQueryBuilder', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'flush', array('entity' => $entity), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'clear', array('entityName' => $entityName), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->clear($entityName);
    }

    public function close()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'close', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->close();
    }

    public function persist($entity)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'persist', array('entity' => $entity), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'remove', array('entity' => $entity), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'refresh', array('entity' => $entity), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'detach', array('entity' => $entity), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'merge', array('entity' => $entity), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getRepository', array('entityName' => $entityName), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'contains', array('entity' => $entity), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getEventManager', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getConfiguration', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'isOpen', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getUnitOfWork', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getProxyFactory', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'initializeObject', array('obj' => $obj), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'getFilters', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'isFiltersStateClean', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'hasFilters', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return $this->valueHoldercf808->hasFilters();
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

        $instance->initializerec82c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercf808) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf808 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf808->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, '__get', ['name' => $name], $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        if (isset(self::$publicProperties0d06d[$name])) {
            return $this->valueHoldercf808->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf808;

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

        $targetObject = $this->valueHoldercf808;
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
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf808;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf808;
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
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, '__isset', array('name' => $name), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf808;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf808;
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
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, '__unset', array('name' => $name), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf808;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf808;
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
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, '__clone', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        $this->valueHoldercf808 = clone $this->valueHoldercf808;
    }

    public function __sleep()
    {
        $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, '__sleep', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;

        return array('valueHoldercf808');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerec82c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerec82c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerec82c && ($this->initializerec82c->__invoke($valueHoldercf808, $this, 'initializeProxy', array(), $this->initializerec82c) || 1) && $this->valueHoldercf808 = $valueHoldercf808;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf808;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf808;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
