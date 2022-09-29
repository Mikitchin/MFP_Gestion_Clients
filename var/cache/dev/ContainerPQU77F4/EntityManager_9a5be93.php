<?php

namespace ContainerPQU77F4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder74ce5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer63ef1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa53bb = [
        
    ];

    public function getConnection()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getConnection', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getMetadataFactory', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getExpressionBuilder', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'beginTransaction', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getCache', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'transactional', array('func' => $func), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'commit', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->commit();
    }

    public function rollback()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'rollback', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getClassMetadata', array('className' => $className), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'createQuery', array('dql' => $dql), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'createNamedQuery', array('name' => $name), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'createQueryBuilder', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'flush', array('entity' => $entity), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'clear', array('entityName' => $entityName), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->clear($entityName);
    }

    public function close()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'close', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->close();
    }

    public function persist($entity)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'persist', array('entity' => $entity), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'remove', array('entity' => $entity), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'refresh', array('entity' => $entity), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'detach', array('entity' => $entity), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'merge', array('entity' => $entity), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'contains', array('entity' => $entity), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getEventManager', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getConfiguration', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'isOpen', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getUnitOfWork', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getProxyFactory', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'initializeObject', array('obj' => $obj), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'getFilters', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'isFiltersStateClean', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'hasFilters', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return $this->valueHolder74ce5->hasFilters();
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

        $instance->initializer63ef1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder74ce5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder74ce5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder74ce5->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, '__get', ['name' => $name], $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        if (isset(self::$publicPropertiesa53bb[$name])) {
            return $this->valueHolder74ce5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ce5;

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

        $targetObject = $this->valueHolder74ce5;
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
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ce5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder74ce5;
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
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, '__isset', array('name' => $name), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ce5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder74ce5;
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
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, '__unset', array('name' => $name), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ce5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder74ce5;
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
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, '__clone', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        $this->valueHolder74ce5 = clone $this->valueHolder74ce5;
    }

    public function __sleep()
    {
        $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, '__sleep', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;

        return array('valueHolder74ce5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer63ef1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer63ef1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer63ef1 && ($this->initializer63ef1->__invoke($valueHolder74ce5, $this, 'initializeProxy', array(), $this->initializer63ef1) || 1) && $this->valueHolder74ce5 = $valueHolder74ce5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder74ce5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder74ce5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
