<?php

require_once 'propel/util/BasePeer.php';
// The object class -- needed for instanceof checks in this class.
// actual class may be a subclass -- as returned by PmtRequestApprovedPeer::getOMClass()
include_once 'classes/PmtRequestApproved.php';

/**
 * Base static class for performing query and update operations on the 'PMT_REQUEST_APPROVED' table.
 *
 * 
 *
 * @package    workflow.classes.om
 */
abstract class BasePmtRequestApprovedPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'PMT_REQUEST_APPROVED';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.PmtRequestApproved';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;


    /** the column name for the APP_UID field */
    const APP_UID = 'PMT_REQUEST_APPROVED.APP_UID';

    /** the column name for the APP_NUMBER field */
    const APP_NUMBER = 'PMT_REQUEST_APPROVED.APP_NUMBER';

    /** the column name for the APP_STATUS field */
    const APP_STATUS = 'PMT_REQUEST_APPROVED.APP_STATUS';

    /** the column name for the USER_CONFIRM field */
    const USER_CONFIRM = 'PMT_REQUEST_APPROVED.USER_CONFIRM';

    /** the column name for the FNA_APPROVE field */
    const FNA_APPROVE = 'PMT_REQUEST_APPROVED.FNA_APPROVE';

    /** the column name for the HEAD_APPROVE field */
    const HEAD_APPROVE = 'PMT_REQUEST_APPROVED.HEAD_APPROVE';

    /** the column name for the LEGAL_APPROVE field */
    const LEGAL_APPROVE = 'PMT_REQUEST_APPROVED.LEGAL_APPROVE';

    /** the column name for the LINE_MANAGER_APPROVE field */
    const LINE_MANAGER_APPROVE = 'PMT_REQUEST_APPROVED.LINE_MANAGER_APPROVE';

    /** the column name for the PROCUREMENT_APPROVE field */
    const PROCUREMENT_APPROVE = 'PMT_REQUEST_APPROVED.PROCUREMENT_APPROVE';

    /** the column name for the REQUEST_APPROVED field */
    const REQUEST_APPROVED = 'PMT_REQUEST_APPROVED.REQUEST_APPROVED';

    /** the column name for the CREATEUSER field */
    const CREATEUSER = 'PMT_REQUEST_APPROVED.CREATEUSER';

    /** the column name for the CREATEUSERNAME field */
    const CREATEUSERNAME = 'PMT_REQUEST_APPROVED.CREATEUSERNAME';

    /** the column name for the CURRENTDEPARTMENT_LABEL field */
    const CURRENTDEPARTMENT_LABEL = 'PMT_REQUEST_APPROVED.CURRENTDEPARTMENT_LABEL';

    /** the column name for the DEPARTMENT_LABEL field */
    const DEPARTMENT_LABEL = 'PMT_REQUEST_APPROVED.DEPARTMENT_LABEL';

    /** the column name for the ERP_ID field */
    const ERP_ID = 'PMT_REQUEST_APPROVED.ERP_ID';

    /** the column name for the ERP_REASON field */
    const ERP_REASON = 'PMT_REQUEST_APPROVED.ERP_REASON';

    /** the column name for the REQUEST_AMOUNT_TOTAL_LABEL field */
    const REQUEST_AMOUNT_TOTAL_LABEL = 'PMT_REQUEST_APPROVED.REQUEST_AMOUNT_TOTAL_LABEL';

    /** the column name for the SUMMARY field */
    const SUMMARY = 'PMT_REQUEST_APPROVED.SUMMARY';

    /** the column name for the SUMMARY_LABEL field */
    const SUMMARY_LABEL = 'PMT_REQUEST_APPROVED.SUMMARY_LABEL';

    /** the column name for the USER_CONFIRM_NOTE field */
    const USER_CONFIRM_NOTE = 'PMT_REQUEST_APPROVED.USER_CONFIRM_NOTE';

    /** The PHP to DB Name Mapping */
    private static $phpNameMap = null;


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    private static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid', 'AppNumber', 'AppStatus', 'UserConfirm', 'FnaApprove', 'HeadApprove', 'LegalApprove', 'LineManagerApprove', 'ProcurementApprove', 'RequestApproved', 'Createuser', 'Createusername', 'CurrentdepartmentLabel', 'DepartmentLabel', 'ErpId', 'ErpReason', 'RequestAmountTotalLabel', 'Summary', 'SummaryLabel', 'UserConfirmNote', ),
        BasePeer::TYPE_COLNAME => array (PmtRequestApprovedPeer::APP_UID, PmtRequestApprovedPeer::APP_NUMBER, PmtRequestApprovedPeer::APP_STATUS, PmtRequestApprovedPeer::USER_CONFIRM, PmtRequestApprovedPeer::FNA_APPROVE, PmtRequestApprovedPeer::HEAD_APPROVE, PmtRequestApprovedPeer::LEGAL_APPROVE, PmtRequestApprovedPeer::LINE_MANAGER_APPROVE, PmtRequestApprovedPeer::PROCUREMENT_APPROVE, PmtRequestApprovedPeer::REQUEST_APPROVED, PmtRequestApprovedPeer::CREATEUSER, PmtRequestApprovedPeer::CREATEUSERNAME, PmtRequestApprovedPeer::CURRENTDEPARTMENT_LABEL, PmtRequestApprovedPeer::DEPARTMENT_LABEL, PmtRequestApprovedPeer::ERP_ID, PmtRequestApprovedPeer::ERP_REASON, PmtRequestApprovedPeer::REQUEST_AMOUNT_TOTAL_LABEL, PmtRequestApprovedPeer::SUMMARY, PmtRequestApprovedPeer::SUMMARY_LABEL, PmtRequestApprovedPeer::USER_CONFIRM_NOTE, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID', 'APP_NUMBER', 'APP_STATUS', 'USER_CONFIRM', 'FNA_APPROVE', 'HEAD_APPROVE', 'LEGAL_APPROVE', 'LINE_MANAGER_APPROVE', 'PROCUREMENT_APPROVE', 'REQUEST_APPROVED', 'CREATEUSER', 'CREATEUSERNAME', 'CURRENTDEPARTMENT_LABEL', 'DEPARTMENT_LABEL', 'ERP_ID', 'ERP_REASON', 'REQUEST_AMOUNT_TOTAL_LABEL', 'SUMMARY', 'SUMMARY_LABEL', 'USER_CONFIRM_NOTE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    private static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid' => 0, 'AppNumber' => 1, 'AppStatus' => 2, 'UserConfirm' => 3, 'FnaApprove' => 4, 'HeadApprove' => 5, 'LegalApprove' => 6, 'LineManagerApprove' => 7, 'ProcurementApprove' => 8, 'RequestApproved' => 9, 'Createuser' => 10, 'Createusername' => 11, 'CurrentdepartmentLabel' => 12, 'DepartmentLabel' => 13, 'ErpId' => 14, 'ErpReason' => 15, 'RequestAmountTotalLabel' => 16, 'Summary' => 17, 'SummaryLabel' => 18, 'UserConfirmNote' => 19, ),
        BasePeer::TYPE_COLNAME => array (PmtRequestApprovedPeer::APP_UID => 0, PmtRequestApprovedPeer::APP_NUMBER => 1, PmtRequestApprovedPeer::APP_STATUS => 2, PmtRequestApprovedPeer::USER_CONFIRM => 3, PmtRequestApprovedPeer::FNA_APPROVE => 4, PmtRequestApprovedPeer::HEAD_APPROVE => 5, PmtRequestApprovedPeer::LEGAL_APPROVE => 6, PmtRequestApprovedPeer::LINE_MANAGER_APPROVE => 7, PmtRequestApprovedPeer::PROCUREMENT_APPROVE => 8, PmtRequestApprovedPeer::REQUEST_APPROVED => 9, PmtRequestApprovedPeer::CREATEUSER => 10, PmtRequestApprovedPeer::CREATEUSERNAME => 11, PmtRequestApprovedPeer::CURRENTDEPARTMENT_LABEL => 12, PmtRequestApprovedPeer::DEPARTMENT_LABEL => 13, PmtRequestApprovedPeer::ERP_ID => 14, PmtRequestApprovedPeer::ERP_REASON => 15, PmtRequestApprovedPeer::REQUEST_AMOUNT_TOTAL_LABEL => 16, PmtRequestApprovedPeer::SUMMARY => 17, PmtRequestApprovedPeer::SUMMARY_LABEL => 18, PmtRequestApprovedPeer::USER_CONFIRM_NOTE => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID' => 0, 'APP_NUMBER' => 1, 'APP_STATUS' => 2, 'USER_CONFIRM' => 3, 'FNA_APPROVE' => 4, 'HEAD_APPROVE' => 5, 'LEGAL_APPROVE' => 6, 'LINE_MANAGER_APPROVE' => 7, 'PROCUREMENT_APPROVE' => 8, 'REQUEST_APPROVED' => 9, 'CREATEUSER' => 10, 'CREATEUSERNAME' => 11, 'CURRENTDEPARTMENT_LABEL' => 12, 'DEPARTMENT_LABEL' => 13, 'ERP_ID' => 14, 'ERP_REASON' => 15, 'REQUEST_AMOUNT_TOTAL_LABEL' => 16, 'SUMMARY' => 17, 'SUMMARY_LABEL' => 18, 'USER_CONFIRM_NOTE' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * @return     MapBuilder the map builder for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getMapBuilder()
    {
        include_once 'classes/map/PmtRequestApprovedMapBuilder.php';
        return BasePeer::getMapBuilder('classes.map.PmtRequestApprovedMapBuilder');
    }
    /**
     * Gets a map (hash) of PHP names to DB column names.
     *
     * @return     array The PHP to DB name map for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @deprecated Use the getFieldNames() and translateFieldName() methods instead of this.
     */
    public static function getPhpNameMap()
    {
        if (self::$phpNameMap === null) {
            $map = PmtRequestApprovedPeer::getTableMap();
            $columns = $map->getColumns();
            $nameMap = array();
            foreach ($columns as $column) {
                $nameMap[$column->getPhpName()] = $column->getColumnName();
            }
            self::$phpNameMap = $nameMap;
        }
        return self::$phpNameMap;
    }
    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants TYPE_PHPNAME,
     *                         TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return     string translated name of the field.
     */
    static public function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }
        return $toNames[$key];
    }

    /**
     * Returns an array of of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants TYPE_PHPNAME,
     *                      TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     array A list of field names
     */

    static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
        }
        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *      $c->addAlias("alias1", TablePeer::TABLE_NAME);
     *      $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. PmtRequestApprovedPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PmtRequestApprovedPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      criteria object containing the columns to add.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria)
    {

        $criteria->addSelectColumn(PmtRequestApprovedPeer::APP_UID);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::APP_NUMBER);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::APP_STATUS);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::USER_CONFIRM);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::FNA_APPROVE);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::HEAD_APPROVE);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::LEGAL_APPROVE);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::LINE_MANAGER_APPROVE);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::PROCUREMENT_APPROVE);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::REQUEST_APPROVED);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::CREATEUSER);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::CREATEUSERNAME);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::CURRENTDEPARTMENT_LABEL);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::DEPARTMENT_LABEL);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::ERP_ID);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::ERP_REASON);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::REQUEST_AMOUNT_TOTAL_LABEL);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::SUMMARY);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::SUMMARY_LABEL);

        $criteria->addSelectColumn(PmtRequestApprovedPeer::USER_CONFIRM_NOTE);

    }

    const COUNT = 'COUNT(PMT_REQUEST_APPROVED.APP_UID)';
    const COUNT_DISTINCT = 'COUNT(DISTINCT PMT_REQUEST_APPROVED.APP_UID)';

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns (You can also set DISTINCT modifier in Criteria).
     * @param      Connection $con
     * @return     int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, $con = null)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // clear out anything that might confuse the ORDER BY clause
        $criteria->clearSelectColumns()->clearOrderByColumns();
        if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->addSelectColumn(PmtRequestApprovedPeer::COUNT_DISTINCT);
        } else {
            $criteria->addSelectColumn(PmtRequestApprovedPeer::COUNT);
        }

        // just in case we're grouping: add those columns to the select statement
        foreach ($criteria->getGroupByColumns() as $column) {
            $criteria->addSelectColumn($column);
        }

        $rs = PmtRequestApprovedPeer::doSelectRS($criteria, $con);
        if ($rs->next()) {
            return $rs->getInt(1);
        } else {
            // no rows returned; we infer that means 0 matches.
            return 0;
        }
    }
    /**
     * Method to select one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      Connection $con
     * @return     PmtRequestApproved
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PmtRequestApprovedPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }
        return null;
    }
    /**
     * Method to do selects.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con
     * @return     array Array of selected Objects
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, $con = null)
    {
        return PmtRequestApprovedPeer::populateObjects(PmtRequestApprovedPeer::doSelectRS($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect()
     * method to get a ResultSet.
     *
     * Use this method directly if you want to just get the resultset
     * (instead of an array of objects).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @return     ResultSet The resultset object with numerically-indexed fields.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectRS(Criteria $criteria, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if (!$criteria->getSelectColumns()) {
            $criteria = clone $criteria;
            PmtRequestApprovedPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a Creole ResultSet, set to return
        // rows indexed numerically.
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function populateObjects(ResultSet $rs)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = PmtRequestApprovedPeer::getOMClass();
        $cls = Propel::import($cls);
        // populate the object(s)
        while ($rs->next()) {

            $obj = new $cls();
            $obj->hydrate($rs);
            $results[] = $obj;

        }
        return $results;
    }
    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return     TableMap
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * The class that the Peer will make instances of.
     *
     * This uses a dot-path notation which is tranalted into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @return     string path.to.ClassName
     */
    public static function getOMClass()
    {
        return PmtRequestApprovedPeer::CLASS_DEFAULT;
    }

    /**
     * Method perform an INSERT on the database, given a PmtRequestApproved or Criteria object.
     *
     * @param      mixed $values Criteria or PmtRequestApproved object containing data that is used to create the INSERT statement.
     * @param      Connection $con the connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PmtRequestApproved object
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->begin();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }

        return $pk;
    }

    /**
     * Method perform an UPDATE on the database, given a PmtRequestApproved or Criteria object.
     *
     * @param      mixed $values Criteria or PmtRequestApproved object containing data create the UPDATE statement.
     * @param      Connection $con The connection to use (specify Connection exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PmtRequestApprovedPeer::APP_UID);
            $selectCriteria->add(PmtRequestApprovedPeer::APP_UID, $criteria->remove(PmtRequestApprovedPeer::APP_UID), $comparison);

        } else {
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Method to DELETE all rows from the PMT_REQUEST_APPROVED table.
     *
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll($con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();
            $affectedRows += BasePeer::doDeleteAll(PmtRequestApprovedPeer::TABLE_NAME, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Method perform a DELETE on the database, given a PmtRequestApproved or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PmtRequestApproved object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      Connection $con the connection to use
     * @return     int  The number of affected rows (if supported by underlying database driver).
     *             This includes CASCADE-related rows
     *              if supported by native driver or if emulated using Propel.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
    */
    public static function doDelete($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PmtRequestApprovedPeer::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } elseif ($values instanceof PmtRequestApproved) {

            $criteria = $values->buildPkeyCriteria();
        } else {
            // it must be the primary key
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(PmtRequestApprovedPeer::APP_UID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PmtRequestApproved object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      PmtRequestApproved $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate(PmtRequestApproved $obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PmtRequestApprovedPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PmtRequestApprovedPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->containsColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(PmtRequestApprovedPeer::DATABASE_NAME, PmtRequestApprovedPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      mixed $pk the primary key.
     * @param      Connection $con the connection to use
     * @return     PmtRequestApproved
     */
    public static function retrieveByPK($pk, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $criteria = new Criteria(PmtRequestApprovedPeer::DATABASE_NAME);

        $criteria->add(PmtRequestApprovedPeer::APP_UID, $pk);


        $v = PmtRequestApprovedPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      Connection $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria();
            $criteria->add(PmtRequestApprovedPeer::APP_UID, $pks, Criteria::IN);
            $objs = PmtRequestApprovedPeer::doSelect($criteria, $con);
        }
        return $objs;
    }
}


// static code to register the map builder for this Peer with the main Propel class
if (Propel::isInit()) {
    // the MapBuilder classes register themselves with Propel during initialization
    // so we need to load them here.
    try {
        BasePmtRequestApprovedPeer::getMapBuilder();
    } catch (Exception $e) {
        Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
    }
} else {
    // even if Propel is not yet initialized, the map builder class can be registered
    // now and then it will be loaded when Propel initializes.
    require_once 'classes/map/PmtRequestApprovedMapBuilder.php';
    Propel::registerMapBuilder('classes.map.PmtRequestApprovedMapBuilder');
}

