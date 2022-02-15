<?php

namespace ContainerF4Vlvxs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd29d3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf8d8e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties286ac = [
        
    ];

    public function getConnection()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getConnection', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getMetadataFactory', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getExpressionBuilder', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'beginTransaction', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getCache', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'transactional', array('func' => $func), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'commit', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->commit();
    }

    public function rollback()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'rollback', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getClassMetadata', array('className' => $className), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'createQuery', array('dql' => $dql), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'createNamedQuery', array('name' => $name), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'createQueryBuilder', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'flush', array('entity' => $entity), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'clear', array('entityName' => $entityName), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->clear($entityName);
    }

    public function close()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'close', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->close();
    }

    public function persist($entity)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'persist', array('entity' => $entity), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'remove', array('entity' => $entity), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'refresh', array('entity' => $entity), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'detach', array('entity' => $entity), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'merge', array('entity' => $entity), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'contains', array('entity' => $entity), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getEventManager', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getConfiguration', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'isOpen', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getUnitOfWork', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getProxyFactory', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'initializeObject', array('obj' => $obj), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'getFilters', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'isFiltersStateClean', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'hasFilters', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return $this->valueHolderd29d3->hasFilters();
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

        $instance->initializerf8d8e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd29d3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd29d3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd29d3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, '__get', ['name' => $name], $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        if (isset(self::$publicProperties286ac[$name])) {
            return $this->valueHolderd29d3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd29d3;

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

        $targetObject = $this->valueHolderd29d3;
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
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd29d3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd29d3;
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
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, '__isset', array('name' => $name), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd29d3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd29d3;
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
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, '__unset', array('name' => $name), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd29d3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd29d3;
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
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, '__clone', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        $this->valueHolderd29d3 = clone $this->valueHolderd29d3;
    }

    public function __sleep()
    {
        $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, '__sleep', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;

        return array('valueHolderd29d3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf8d8e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf8d8e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf8d8e && ($this->initializerf8d8e->__invoke($valueHolderd29d3, $this, 'initializeProxy', array(), $this->initializerf8d8e) || 1) && $this->valueHolderd29d3 = $valueHolderd29d3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd29d3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd29d3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
