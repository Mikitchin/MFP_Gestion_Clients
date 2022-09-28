<?php

namespace Container0yJc1i7;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4b578 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer363f2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59b71 = [
        
    ];

    public function getConnection()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getConnection', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getMetadataFactory', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getExpressionBuilder', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'beginTransaction', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getCache', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getCache();
    }

    public function transactional($func)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'transactional', array('func' => $func), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'wrapInTransaction', array('func' => $func), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'commit', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->commit();
    }

    public function rollback()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'rollback', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getClassMetadata', array('className' => $className), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'createQuery', array('dql' => $dql), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'createNamedQuery', array('name' => $name), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'createQueryBuilder', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'flush', array('entity' => $entity), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'clear', array('entityName' => $entityName), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->clear($entityName);
    }

    public function close()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'close', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->close();
    }

    public function persist($entity)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'persist', array('entity' => $entity), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'remove', array('entity' => $entity), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'refresh', array('entity' => $entity), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'detach', array('entity' => $entity), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'merge', array('entity' => $entity), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getRepository', array('entityName' => $entityName), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'contains', array('entity' => $entity), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getEventManager', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getConfiguration', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'isOpen', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getUnitOfWork', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getProxyFactory', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'initializeObject', array('obj' => $obj), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'getFilters', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'isFiltersStateClean', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'hasFilters', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return $this->valueHolder4b578->hasFilters();
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

        $instance->initializer363f2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder4b578) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4b578 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4b578->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, '__get', ['name' => $name], $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        if (isset(self::$publicProperties59b71[$name])) {
            return $this->valueHolder4b578->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b578;

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

        $targetObject = $this->valueHolder4b578;
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
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b578;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4b578;
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
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, '__isset', array('name' => $name), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b578;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4b578;
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
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, '__unset', array('name' => $name), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b578;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4b578;
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
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, '__clone', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        $this->valueHolder4b578 = clone $this->valueHolder4b578;
    }

    public function __sleep()
    {
        $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, '__sleep', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;

        return array('valueHolder4b578');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer363f2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer363f2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer363f2 && ($this->initializer363f2->__invoke($valueHolder4b578, $this, 'initializeProxy', array(), $this->initializer363f2) || 1) && $this->valueHolder4b578 = $valueHolder4b578;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b578;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b578;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
