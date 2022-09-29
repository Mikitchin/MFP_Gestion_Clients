<?php

namespace ContainerRNHJcvF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf010b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer978d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1fdfd = [
        
    ];

    public function getConnection()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getConnection', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getMetadataFactory', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getExpressionBuilder', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'beginTransaction', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getCache', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'transactional', array('func' => $func), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'commit', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->commit();
    }

    public function rollback()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'rollback', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getClassMetadata', array('className' => $className), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'createQuery', array('dql' => $dql), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'createNamedQuery', array('name' => $name), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'createQueryBuilder', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'flush', array('entity' => $entity), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'clear', array('entityName' => $entityName), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->clear($entityName);
    }

    public function close()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'close', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->close();
    }

    public function persist($entity)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'persist', array('entity' => $entity), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'remove', array('entity' => $entity), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'refresh', array('entity' => $entity), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'detach', array('entity' => $entity), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'merge', array('entity' => $entity), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'contains', array('entity' => $entity), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getEventManager', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getConfiguration', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'isOpen', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getUnitOfWork', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getProxyFactory', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'initializeObject', array('obj' => $obj), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'getFilters', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'isFiltersStateClean', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'hasFilters', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return $this->valueHolderf010b->hasFilters();
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

        $instance->initializer978d1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf010b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf010b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf010b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, '__get', ['name' => $name], $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        if (isset(self::$publicProperties1fdfd[$name])) {
            return $this->valueHolderf010b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf010b;

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

        $targetObject = $this->valueHolderf010b;
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
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf010b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf010b;
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
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, '__isset', array('name' => $name), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf010b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf010b;
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
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, '__unset', array('name' => $name), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf010b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf010b;
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
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, '__clone', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        $this->valueHolderf010b = clone $this->valueHolderf010b;
    }

    public function __sleep()
    {
        $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, '__sleep', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;

        return array('valueHolderf010b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer978d1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer978d1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer978d1 && ($this->initializer978d1->__invoke($valueHolderf010b, $this, 'initializeProxy', array(), $this->initializer978d1) || 1) && $this->valueHolderf010b = $valueHolderf010b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf010b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf010b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
