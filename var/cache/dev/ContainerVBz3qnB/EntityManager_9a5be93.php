<?php

namespace ContainerVBz3qnB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd2e9a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer631b6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfe138 = [
        
    ];

    public function getConnection()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getConnection', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getMetadataFactory', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getExpressionBuilder', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'beginTransaction', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getCache', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'transactional', array('func' => $func), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'commit', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->commit();
    }

    public function rollback()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'rollback', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getClassMetadata', array('className' => $className), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'createQuery', array('dql' => $dql), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'createNamedQuery', array('name' => $name), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'createQueryBuilder', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'flush', array('entity' => $entity), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'clear', array('entityName' => $entityName), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->clear($entityName);
    }

    public function close()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'close', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->close();
    }

    public function persist($entity)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'persist', array('entity' => $entity), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'remove', array('entity' => $entity), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'refresh', array('entity' => $entity), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'detach', array('entity' => $entity), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'merge', array('entity' => $entity), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'contains', array('entity' => $entity), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getEventManager', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getConfiguration', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'isOpen', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getUnitOfWork', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getProxyFactory', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'initializeObject', array('obj' => $obj), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'getFilters', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'isFiltersStateClean', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'hasFilters', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return $this->valueHolderd2e9a->hasFilters();
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

        $instance->initializer631b6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd2e9a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd2e9a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd2e9a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, '__get', ['name' => $name], $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        if (isset(self::$publicPropertiesfe138[$name])) {
            return $this->valueHolderd2e9a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2e9a;

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

        $targetObject = $this->valueHolderd2e9a;
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
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2e9a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd2e9a;
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
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, '__isset', array('name' => $name), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2e9a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd2e9a;
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
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, '__unset', array('name' => $name), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd2e9a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd2e9a;
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
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, '__clone', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        $this->valueHolderd2e9a = clone $this->valueHolderd2e9a;
    }

    public function __sleep()
    {
        $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, '__sleep', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;

        return array('valueHolderd2e9a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer631b6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer631b6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer631b6 && ($this->initializer631b6->__invoke($valueHolderd2e9a, $this, 'initializeProxy', array(), $this->initializer631b6) || 1) && $this->valueHolderd2e9a = $valueHolderd2e9a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd2e9a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd2e9a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
