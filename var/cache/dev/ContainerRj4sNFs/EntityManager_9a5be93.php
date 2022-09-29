<?php

namespace ContainerRj4sNFs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7063b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer777f3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd0ed6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getConnection', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getMetadataFactory', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getExpressionBuilder', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'beginTransaction', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getCache', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'transactional', array('func' => $func), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'commit', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->commit();
    }

    public function rollback()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'rollback', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getClassMetadata', array('className' => $className), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'createQuery', array('dql' => $dql), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'createNamedQuery', array('name' => $name), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'createQueryBuilder', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'flush', array('entity' => $entity), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'clear', array('entityName' => $entityName), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->clear($entityName);
    }

    public function close()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'close', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->close();
    }

    public function persist($entity)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'persist', array('entity' => $entity), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'remove', array('entity' => $entity), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'refresh', array('entity' => $entity), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'detach', array('entity' => $entity), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'merge', array('entity' => $entity), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'contains', array('entity' => $entity), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getEventManager', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getConfiguration', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'isOpen', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getUnitOfWork', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getProxyFactory', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'initializeObject', array('obj' => $obj), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'getFilters', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'isFiltersStateClean', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'hasFilters', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return $this->valueHolder7063b->hasFilters();
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

        $instance->initializer777f3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7063b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7063b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7063b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, '__get', ['name' => $name], $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        if (isset(self::$publicPropertiesd0ed6[$name])) {
            return $this->valueHolder7063b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7063b;

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

        $targetObject = $this->valueHolder7063b;
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
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7063b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7063b;
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
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, '__isset', array('name' => $name), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7063b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7063b;
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
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, '__unset', array('name' => $name), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7063b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7063b;
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
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, '__clone', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        $this->valueHolder7063b = clone $this->valueHolder7063b;
    }

    public function __sleep()
    {
        $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, '__sleep', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;

        return array('valueHolder7063b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer777f3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer777f3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer777f3 && ($this->initializer777f3->__invoke($valueHolder7063b, $this, 'initializeProxy', array(), $this->initializer777f3) || 1) && $this->valueHolder7063b = $valueHolder7063b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7063b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7063b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
