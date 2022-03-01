<?php

namespace ContainerHIZPHwP;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder55de6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf0047 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdeb39 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getConnection', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getMetadataFactory', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getExpressionBuilder', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'beginTransaction', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getCache', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'transactional', array('func' => $func), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'commit', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->commit();
    }

    public function rollback()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'rollback', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getClassMetadata', array('className' => $className), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'createQuery', array('dql' => $dql), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'createNamedQuery', array('name' => $name), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'createQueryBuilder', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'flush', array('entity' => $entity), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'clear', array('entityName' => $entityName), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->clear($entityName);
    }

    public function close()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'close', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->close();
    }

    public function persist($entity)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'persist', array('entity' => $entity), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'remove', array('entity' => $entity), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'refresh', array('entity' => $entity), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'detach', array('entity' => $entity), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'merge', array('entity' => $entity), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'contains', array('entity' => $entity), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getEventManager', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getConfiguration', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'isOpen', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getUnitOfWork', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getProxyFactory', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'initializeObject', array('obj' => $obj), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'getFilters', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'isFiltersStateClean', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'hasFilters', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return $this->valueHolder55de6->hasFilters();
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

        $instance->initializerf0047 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder55de6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder55de6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder55de6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, '__get', ['name' => $name], $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        if (isset(self::$publicPropertiesdeb39[$name])) {
            return $this->valueHolder55de6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55de6;

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

        $targetObject = $this->valueHolder55de6;
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
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55de6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder55de6;
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
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, '__isset', array('name' => $name), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55de6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder55de6;
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
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, '__unset', array('name' => $name), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder55de6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder55de6;
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
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, '__clone', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        $this->valueHolder55de6 = clone $this->valueHolder55de6;
    }

    public function __sleep()
    {
        $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, '__sleep', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;

        return array('valueHolder55de6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf0047 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf0047;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf0047 && ($this->initializerf0047->__invoke($valueHolder55de6, $this, 'initializeProxy', array(), $this->initializerf0047) || 1) && $this->valueHolder55de6 = $valueHolder55de6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder55de6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder55de6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
