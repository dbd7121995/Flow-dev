<?php

require_once 'propel/map/MapBuilder.php';
include_once 'creole/CreoleTypes.php';


/**
 * This class adds structure of 'PMT_THANHTOAN' table to 'workflow' DatabaseMap object.
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
class PmtThanhtoanMapBuilder
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'classes.map.PmtThanhtoanMapBuilder';

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

        $tMap = $this->dbMap->addTable('PMT_THANHTOAN');
        $tMap->setPhpName('PmtThanhtoan');

        $tMap->setUseIdGenerator(false);

        $tMap->addPrimaryKey('APP_UID', 'AppUid', 'string', CreoleTypes::VARCHAR, true, 32);

        $tMap->addColumn('APP_NUMBER', 'AppNumber', 'int', CreoleTypes::INTEGER, true, 11);

        $tMap->addColumn('APP_STATUS', 'AppStatus', 'string', CreoleTypes::VARCHAR, true, 10);

        $tMap->addColumn('ACCOUNTING_APPROVE', 'AccountingApprove', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('ACCOUNTING_APPROVE_LABEL', 'AccountingApproveLabel', 'string', CreoleTypes::LONGVARCHAR, false, null);

        $tMap->addColumn('ACCOUNTING_NOTE', 'AccountingNote', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('ACCOUNTING_NOTE_LABEL', 'AccountingNoteLabel', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('BUDGET_COST_ITEM', 'BudgetCostItem', 'double', CreoleTypes::FLOAT, false, 11);

        $tMap->addColumn('BUDGET_DEPARTMENT', 'BudgetDepartment', 'double', CreoleTypes::FLOAT, false, 11);

        $tMap->addColumn('CONTRACT_FILE', 'ContractFile', 'string', CreoleTypes::LONGVARCHAR, false, null);

        $tMap->addColumn('CONTRACT_NAME', 'ContractName', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('CONTRACT_NO', 'ContractNo', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('CONTRACT_TYPE', 'ContractType', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('COST_ITEM_LV2', 'CostItemLv2', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('COST_ITEM_LV3', 'CostItemLv3', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('CREATEUSER', 'Createuser', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('CURRENTDEPARTMENT', 'Currentdepartment', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('DATE_CLOSE', 'DateClose', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('DATE_OPEN', 'DateOpen', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('ERP_ID', 'ErpId', 'double', CreoleTypes::FLOAT, false, 11);

        $tMap->addColumn('ERP_REASON', 'ErpReason', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('FLOW_ID', 'FlowId', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('FNAUSER', 'Fnauser', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('FNA_APPROVE', 'FnaApprove', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('FNA_NOTE', 'FnaNote', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('HEAD_APPROVE', 'HeadApprove', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('HEAD_APPROVE_LABEL', 'HeadApproveLabel', 'string', CreoleTypes::LONGVARCHAR, false, null);

        $tMap->addColumn('HEAD_NOTE', 'HeadNote', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('HEAD_NOTE_LABEL', 'HeadNoteLabel', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('LEGALUSER', 'Legaluser', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('LINE_MANAGER', 'LineManager', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('LINE_MANAGER_1', 'LineManager1', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('LINE_MANAGER_APPROVE', 'LineManagerApprove', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('LINE_MANAGER_APPROVE_LABEL', 'LineManagerApproveLabel', 'string', CreoleTypes::LONGVARCHAR, false, null);

        $tMap->addColumn('LINE_MANAGER_NOTE', 'LineManagerNote', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('LINE_MANAGER_NOTE_LABEL', 'LineManagerNoteLabel', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('PAYMENT_AMOUNT', 'PaymentAmount', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('PAYMENT_DATE', 'PaymentDate', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('PAYMENT_SUMMARY', 'PaymentSummary', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('PAYMENT_SUPPLIER', 'PaymentSupplier', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('REQUEST_AMOUNT', 'RequestAmount', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('REQUEST_AMOUNT_TOTAL', 'RequestAmountTotal', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('REQUEST_APPROVED', 'RequestApproved', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('REQUEST_CONTRACT', 'RequestContract', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('REQUEST_ID', 'RequestId', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('REQUEST_TYPE', 'RequestType', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('SALEUSER', 'Saleuser', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('SEARCH_FLOW_ID_BY_NAME', 'SearchFlowIdByName', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('SUMMARY', 'Summary', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('SUPPLIER_CODE', 'SupplierCode', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('SUPPLIER_NAME', 'SupplierName', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('USER_CONFIRM', 'UserConfirm', 'int', CreoleTypes::INTEGER, false, 1);

        $tMap->addColumn('SUPPLIER_PAYMENT_INFO', 'SupplierPaymentInfo', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('USER_CONFIRM_NOTE', 'UserConfirmNote', 'string', CreoleTypes::VARCHAR, false, 255);

        $tMap->addColumn('USER_NOTE', 'UserNote', 'string', CreoleTypes::VARCHAR, false, 255);

    } // doBuild()

} // PmtThanhtoanMapBuilder
