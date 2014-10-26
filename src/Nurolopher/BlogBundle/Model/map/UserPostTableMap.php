<?php

namespace Nurolopher\BlogBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'user_post' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.Nurolopher.BlogBundle.Model.map
 */
class UserPostTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Nurolopher.BlogBundle.Model.map.UserPostTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('user_post');
        $this->setPhpName('UserPost');
        $this->setClassname('Nurolopher\\BlogBundle\\Model\\UserPost');
        $this->setPackage('src.Nurolopher.BlogBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('user_id', 'UserId', 'INTEGER' , 'user', 'id', true, null, null);
        $this->addForeignPrimaryKey('post_id', 'PostId', 'INTEGER' , 'post', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'Nurolopher\\BlogBundle\\Model\\User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
        $this->addRelation('Post', 'Nurolopher\\BlogBundle\\Model\\Post', RelationMap::MANY_TO_ONE, array('post_id' => 'id', ), null, null);
    } // buildRelations()

} // UserPostTableMap