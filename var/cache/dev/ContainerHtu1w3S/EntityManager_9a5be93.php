<?php

namespace ContainerHtu1w3S;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2b26 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer64a13 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc9fa7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getConnection', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getMetadataFactory', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getExpressionBuilder', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'beginTransaction', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getCache', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getCache();
    }

    public function transactional($func)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'transactional', array('func' => $func), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'wrapInTransaction', array('func' => $func), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'commit', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->commit();
    }

    public function rollback()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'rollback', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getClassMetadata', array('className' => $className), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'createQuery', array('dql' => $dql), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'createNamedQuery', array('name' => $name), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'createQueryBuilder', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'flush', array('entity' => $entity), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'clear', array('entityName' => $entityName), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->clear($entityName);
    }

    public function close()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'close', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->close();
    }

    public function persist($entity)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'persist', array('entity' => $entity), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'remove', array('entity' => $entity), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'refresh', array('entity' => $entity), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'detach', array('entity' => $entity), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'merge', array('entity' => $entity), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getRepository', array('entityName' => $entityName), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'contains', array('entity' => $entity), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getEventManager', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getConfiguration', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'isOpen', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getUnitOfWork', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getProxyFactory', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'initializeObject', array('obj' => $obj), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'getFilters', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'isFiltersStateClean', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'hasFilters', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return $this->valueHolderf2b26->hasFilters();
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

        $instance->initializer64a13 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf2b26) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2b26 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf2b26->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, '__get', ['name' => $name], $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        if (isset(self::$publicPropertiesc9fa7[$name])) {
            return $this->valueHolderf2b26->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2b26;

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

        $targetObject = $this->valueHolderf2b26;
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
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2b26;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2b26;
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
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, '__isset', array('name' => $name), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2b26;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2b26;
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
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, '__unset', array('name' => $name), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2b26;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2b26;
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
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, '__clone', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        $this->valueHolderf2b26 = clone $this->valueHolderf2b26;
    }

    public function __sleep()
    {
        $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, '__sleep', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;

        return array('valueHolderf2b26');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer64a13 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer64a13;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer64a13 && ($this->initializer64a13->__invoke($valueHolderf2b26, $this, 'initializeProxy', array(), $this->initializer64a13) || 1) && $this->valueHolderf2b26 = $valueHolderf2b26;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2b26;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2b26;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
