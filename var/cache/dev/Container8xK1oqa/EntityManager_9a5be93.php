<?php

namespace Container8xK1oqa;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfb082 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer476a4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0c39b = [
        
    ];

    public function getConnection()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getConnection', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getMetadataFactory', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getExpressionBuilder', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'beginTransaction', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getCache', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getCache();
    }

    public function transactional($func)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'transactional', array('func' => $func), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'wrapInTransaction', array('func' => $func), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'commit', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->commit();
    }

    public function rollback()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'rollback', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getClassMetadata', array('className' => $className), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'createQuery', array('dql' => $dql), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'createNamedQuery', array('name' => $name), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'createQueryBuilder', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'flush', array('entity' => $entity), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'clear', array('entityName' => $entityName), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->clear($entityName);
    }

    public function close()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'close', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->close();
    }

    public function persist($entity)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'persist', array('entity' => $entity), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'remove', array('entity' => $entity), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'refresh', array('entity' => $entity), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'detach', array('entity' => $entity), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'merge', array('entity' => $entity), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getRepository', array('entityName' => $entityName), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'contains', array('entity' => $entity), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getEventManager', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getConfiguration', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'isOpen', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getUnitOfWork', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getProxyFactory', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'initializeObject', array('obj' => $obj), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'getFilters', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'isFiltersStateClean', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'hasFilters', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return $this->valueHolderfb082->hasFilters();
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

        $instance->initializer476a4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfb082) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb082 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfb082->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, '__get', ['name' => $name], $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        if (isset(self::$publicProperties0c39b[$name])) {
            return $this->valueHolderfb082->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb082;

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

        $targetObject = $this->valueHolderfb082;
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
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb082;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb082;
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
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, '__isset', array('name' => $name), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb082;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfb082;
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
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, '__unset', array('name' => $name), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb082;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfb082;
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
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, '__clone', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        $this->valueHolderfb082 = clone $this->valueHolderfb082;
    }

    public function __sleep()
    {
        $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, '__sleep', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;

        return array('valueHolderfb082');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer476a4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer476a4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer476a4 && ($this->initializer476a4->__invoke($valueHolderfb082, $this, 'initializeProxy', array(), $this->initializer476a4) || 1) && $this->valueHolderfb082 = $valueHolderfb082;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb082;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb082;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
