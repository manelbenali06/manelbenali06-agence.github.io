<?php

namespace ContainerFxlBxQr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6a4d6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbd9b6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties70de5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getConnection', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getMetadataFactory', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getExpressionBuilder', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'beginTransaction', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getCache', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'transactional', array('func' => $func), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'commit', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->commit();
    }

    public function rollback()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'rollback', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getClassMetadata', array('className' => $className), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'createQuery', array('dql' => $dql), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'createNamedQuery', array('name' => $name), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'createQueryBuilder', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'flush', array('entity' => $entity), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'clear', array('entityName' => $entityName), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->clear($entityName);
    }

    public function close()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'close', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->close();
    }

    public function persist($entity)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'persist', array('entity' => $entity), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'remove', array('entity' => $entity), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'refresh', array('entity' => $entity), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'detach', array('entity' => $entity), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'merge', array('entity' => $entity), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'contains', array('entity' => $entity), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getEventManager', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getConfiguration', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'isOpen', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getUnitOfWork', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getProxyFactory', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'initializeObject', array('obj' => $obj), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'getFilters', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'isFiltersStateClean', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'hasFilters', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return $this->valueHolder6a4d6->hasFilters();
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

        $instance->initializerbd9b6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6a4d6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6a4d6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6a4d6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, '__get', ['name' => $name], $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        if (isset(self::$publicProperties70de5[$name])) {
            return $this->valueHolder6a4d6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a4d6;

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

        $targetObject = $this->valueHolder6a4d6;
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
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a4d6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6a4d6;
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
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, '__isset', array('name' => $name), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a4d6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6a4d6;
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
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, '__unset', array('name' => $name), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6a4d6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6a4d6;
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
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, '__clone', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        $this->valueHolder6a4d6 = clone $this->valueHolder6a4d6;
    }

    public function __sleep()
    {
        $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, '__sleep', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;

        return array('valueHolder6a4d6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd9b6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd9b6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbd9b6 && ($this->initializerbd9b6->__invoke($valueHolder6a4d6, $this, 'initializeProxy', array(), $this->initializerbd9b6) || 1) && $this->valueHolder6a4d6 = $valueHolder6a4d6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6a4d6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6a4d6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
