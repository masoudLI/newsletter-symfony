<?php

namespace Container0uIprZH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere1e5c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer89a55 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf35ca = [
        
    ];

    public function getConnection()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getConnection', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getMetadataFactory', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getExpressionBuilder', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'beginTransaction', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getCache', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'transactional', array('func' => $func), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'commit', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->commit();
    }

    public function rollback()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'rollback', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getClassMetadata', array('className' => $className), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'createQuery', array('dql' => $dql), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'createNamedQuery', array('name' => $name), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'createQueryBuilder', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'flush', array('entity' => $entity), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'clear', array('entityName' => $entityName), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->clear($entityName);
    }

    public function close()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'close', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->close();
    }

    public function persist($entity)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'persist', array('entity' => $entity), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'remove', array('entity' => $entity), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'detach', array('entity' => $entity), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'merge', array('entity' => $entity), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'contains', array('entity' => $entity), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getEventManager', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getConfiguration', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'isOpen', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getUnitOfWork', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getProxyFactory', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'initializeObject', array('obj' => $obj), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'getFilters', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'isFiltersStateClean', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'hasFilters', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return $this->valueHoldere1e5c->hasFilters();
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

        $instance->initializer89a55 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldere1e5c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere1e5c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere1e5c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, '__get', ['name' => $name], $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        if (isset(self::$publicPropertiesf35ca[$name])) {
            return $this->valueHoldere1e5c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1e5c;

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

        $targetObject = $this->valueHoldere1e5c;
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
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1e5c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere1e5c;
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
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, '__isset', array('name' => $name), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1e5c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere1e5c;
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
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, '__unset', array('name' => $name), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1e5c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere1e5c;
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
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, '__clone', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        $this->valueHoldere1e5c = clone $this->valueHoldere1e5c;
    }

    public function __sleep()
    {
        $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, '__sleep', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;

        return array('valueHoldere1e5c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer89a55 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer89a55;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer89a55 && ($this->initializer89a55->__invoke($valueHoldere1e5c, $this, 'initializeProxy', array(), $this->initializer89a55) || 1) && $this->valueHoldere1e5c = $valueHoldere1e5c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1e5c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1e5c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
