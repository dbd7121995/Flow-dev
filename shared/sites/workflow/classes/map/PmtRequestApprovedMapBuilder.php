<?php

require_once 'propel/map/MapBuilder.php';
include_once 'creole/CreoleTypes.php';


/**
 * This class adds structure of 'PMT_REQUEST_APPROVED' table to 'workflow' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    workflow.classes.map
 */
class PmtRequestApprovedMapBuilder
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'classes.map.PmtRequestApprovedMapBuilder';

    /**
     * The database map.
     */
    private $dbMap;

    /**
     * Tells us if this DatabaseMapBuilder is built so that we
     * don't have to re-build it every time.
     *
     * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
     */
    public function isBuilt()
    {
        return ($this->dbMap !== null);
    }

    /**
     * Gets the databasemap this map builder built.
     *
     * @return     the databasemap
     */
    public function getDatabaseMap()
    {
        return $this->dbMap;
    }

    /**
     * The doBuild() method builds the DatabaseMap
     *
     * @return     void
     * @throws     PropelException
     */
    public function doBuild()
    {
        $this->dbMap = Propel::getDatabaseMap('workflow');

        $tMap = $this->dbMap->addTable('PMT_REQUEST_APPROVED');
        $tMap->setPhpName('PmtRequestApproved');

        $tMap->setUseIdGenerator(false);

        $tMap->addPrimaryKey('APP_UID', 'AppUid', 'string', CreoleTypes::VARCHAR, true, 32);

        $tMap->addColumn('APP_NUMBER', 'AppNumber', 'int', CreoleTypes::INTEGER, true, 11);

        $tMap->addColumn('APP_STATUS', 'AppStatus', 'string', CreoleTypes::VARCHAR, true, 10);

        $tMap->addColumn('USER_CONFIRM', 'UserConfirm', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('FNA_APPROVE', 'FnaApprove', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('HEAD_APPROVE', 'HeadApprove', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('LEGAL_APPROVE', 'LegalApprove', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('LINE_MANAGER_APPROVE', 'LineManagerApprove', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('PROCUREMENT_APPROVE', 'ProcurementApprove', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('REQUEST_APPROVED', 'RequestApproved', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('CREATEUSER', 'Createuser', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('CREATEUSERNAME', 'Createusername', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('CURRENTDEPARTMENT_LABEL', 'CurrentdepartmentLabel', 'string', CreoleTypes::VARCHAR, false, 32);

        $tMap->addColumn('DEPARTMENT_LABEL', 'DepartmentLabel', 'string', CreoleTypes::VARCHAR, false, 32);

        $tMap->addColumn('ERP_ID', 'ErpId', 'double', CreoleTypes::FLOAT, false, 11);

        $tMap->addColumn('ERP_REASON', 'ErpReason', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('REQUEST_AMOUNT_TOTAL_LABEL', 'RequestAmountTotalLabel', 'string', CreoleTypes::VARCHAR, false, 32);

        $tMap->addColumn('SUMMARY', 'Summary', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('SUMMARY_LABEL', 'SummaryLabel', 'string', CreoleTypes::VARCHAR, false, 32);

        $tMap->addColumn('USER_CONFIRM_NOTE', 'UserConfirmNote', 'string', CreoleTypes::VARCHAR, false, 255);

    } // doBuild()

} // PmtRequestApprovedMapBuilder
