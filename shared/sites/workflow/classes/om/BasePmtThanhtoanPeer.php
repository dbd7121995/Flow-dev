<?php

require_once 'propel/util/BasePeer.php';
// The object class -- needed for instanceof checks in this class.
// actual class may be a subclass -- as returned by PmtThanhtoanPeer::getOMClass()
include_once 'classes/PmtThanhtoan.php';

/**
 * Base static class for performing query and update operations on the 'PMT_THANHTOAN' table.
 *
 * 
 *
 * @package    workflow.classes.om
 */
abstract class BasePmtThanhtoanPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'PMT_THANHTOAN';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.PmtThanhtoan';

    /** The total number of columns. */
    const NUM_COLUMNS = 57;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;


    /** the column name for the APP_UID field */
    const APP_UID = 'PMT_THANHTOAN.APP_UID';

    /** the column name for the APP_NUMBER field */
    const APP_NUMBER = 'PMT_THANHTOAN.APP_NUMBER';

    /** the column name for the APP_STATUS field */
    const APP_STATUS = 'PMT_THANHTOAN.APP_STATUS';

    /** the column name for the ACCOUNTING_APPROVE field */
    const ACCOUNTING_APPROVE = 'PMT_THANHTOAN.ACCOUNTING_APPROVE';

    /** the column name for the ACCOUNTING_APPROVE_LABEL field */
    const ACCOUNTING_APPROVE_LABEL = 'PMT_THANHTOAN.ACCOUNTING_APPROVE_LABEL';

    /** the column name for the ACCOUNTING_NOTE field */
    const ACCOUNTING_NOTE = 'PMT_THANHTOAN.ACCOUNTING_NOTE';

    /** the column name for the ACCOUNTING_NOTE_LABEL field */
    const ACCOUNTING_NOTE_LABEL = 'PMT_THANHTOAN.ACCOUNTING_NOTE_LABEL';

    /** the column name for the BUDGET_COST_ITEM field */
    const BUDGET_COST_ITEM = 'PMT_THANHTOAN.BUDGET_COST_ITEM';

    /** the column name for the BUDGET_DEPARTMENT field */
    const BUDGET_DEPARTMENT = 'PMT_THANHTOAN.BUDGET_DEPARTMENT';

    /** the column name for the CONTRACT_FILE field */
    const CONTRACT_FILE = 'PMT_THANHTOAN.CONTRACT_FILE';

    /** the column name for the CONTRACT_NAME field */
    const CONTRACT_NAME = 'PMT_THANHTOAN.CONTRACT_NAME';

    /** the column name for the CONTRACT_NO field */
    const CONTRACT_NO = 'PMT_THANHTOAN.CONTRACT_NO';

    /** the column name for the CONTRACT_TYPE field */
    const CONTRACT_TYPE = 'PMT_THANHTOAN.CONTRACT_TYPE';

    /** the column name for the COST_ITEM_LV2 field */
    const COST_ITEM_LV2 = 'PMT_THANHTOAN.COST_ITEM_LV2';

    /** the column name for the COST_ITEM_LV3 field */
    const COST_ITEM_LV3 = 'PMT_THANHTOAN.COST_ITEM_LV3';

    /** the column name for the CREATEUSER field */
    const CREATEUSER = 'PMT_THANHTOAN.CREATEUSER';

    /** the column name for the CURRENTDEPARTMENT field */
    const CURRENTDEPARTMENT = 'PMT_THANHTOAN.CURRENTDEPARTMENT';

    /** the column name for the DATE_CLOSE field */
    const DATE_CLOSE = 'PMT_THANHTOAN.DATE_CLOSE';

    /** the column name for the DATE_OPEN field */
    const DATE_OPEN = 'PMT_THANHTOAN.DATE_OPEN';

    /** the column name for the DEPARTMENT field */
    const DEPARTMENT = 'PMT_THANHTOAN.DEPARTMENT';

    /** the column name for the DESCRIPTION field */
    const DESCRIPTION = 'PMT_THANHTOAN.DESCRIPTION';

    /** the column name for the ERP_ID field */
    const ERP_ID = 'PMT_THANHTOAN.ERP_ID';

    /** the column name for the ERP_REASON field */
    const ERP_REASON = 'PMT_THANHTOAN.ERP_REASON';

    /** the column name for the FLOW_ID field */
    const FLOW_ID = 'PMT_THANHTOAN.FLOW_ID';

    /** the column name for the FNAUSER field */
    const FNAUSER = 'PMT_THANHTOAN.FNAUSER';

    /** the column name for the FNA_APPROVE field */
    const FNA_APPROVE = 'PMT_THANHTOAN.FNA_APPROVE';

    /** the column name for the FNA_NOTE field */
    const FNA_NOTE = 'PMT_THANHTOAN.FNA_NOTE';

    /** the column name for the HEAD_APPROVE field */
    const HEAD_APPROVE = 'PMT_THANHTOAN.HEAD_APPROVE';

    /** the column name for the HEAD_APPROVE_LABEL field */
    const HEAD_APPROVE_LABEL = 'PMT_THANHTOAN.HEAD_APPROVE_LABEL';

    /** the column name for the HEAD_NOTE field */
    const HEAD_NOTE = 'PMT_THANHTOAN.HEAD_NOTE';

    /** the column name for the HEAD_NOTE_LABEL field */
    const HEAD_NOTE_LABEL = 'PMT_THANHTOAN.HEAD_NOTE_LABEL';

    /** the column name for the LEGALUSER field */
    const LEGALUSER = 'PMT_THANHTOAN.LEGALUSER';

    /** the column name for the LINE_MANAGER field */
    const LINE_MANAGER = 'PMT_THANHTOAN.LINE_MANAGER';

    /** the column name for the LINE_MANAGER_1 field */
    const LINE_MANAGER_1 = 'PMT_THANHTOAN.LINE_MANAGER_1';

    /** the column name for the LINE_MANAGER_APPROVE field */
    const LINE_MANAGER_APPROVE = 'PMT_THANHTOAN.LINE_MANAGER_APPROVE';

    /** the column name for the LINE_MANAGER_APPROVE_LABEL field */
    const LINE_MANAGER_APPROVE_LABEL = 'PMT_THANHTOAN.LINE_MANAGER_APPROVE_LABEL';

    /** the column name for the LINE_MANAGER_NOTE field */
    const LINE_MANAGER_NOTE = 'PMT_THANHTOAN.LINE_MANAGER_NOTE';

    /** the column name for the LINE_MANAGER_NOTE_LABEL field */
    const LINE_MANAGER_NOTE_LABEL = 'PMT_THANHTOAN.LINE_MANAGER_NOTE_LABEL';

    /** the column name for the PAYMENT_AMOUNT field */
    const PAYMENT_AMOUNT = 'PMT_THANHTOAN.PAYMENT_AMOUNT';

    /** the column name for the PAYMENT_DATE field */
    const PAYMENT_DATE = 'PMT_THANHTOAN.PAYMENT_DATE';

    /** the column name for the PAYMENT_SUMMARY field */
    const PAYMENT_SUMMARY = 'PMT_THANHTOAN.PAYMENT_SUMMARY';

    /** the column name for the PAYMENT_SUPPLIER field */
    const PAYMENT_SUPPLIER = 'PMT_THANHTOAN.PAYMENT_SUPPLIER';

    /** the column name for the REQUEST_AMOUNT field */
    const REQUEST_AMOUNT = 'PMT_THANHTOAN.REQUEST_AMOUNT';

    /** the column name for the REQUEST_AMOUNT_TOTAL field */
    const REQUEST_AMOUNT_TOTAL = 'PMT_THANHTOAN.REQUEST_AMOUNT_TOTAL';

    /** the column name for the REQUEST_APPROVED field */
    const REQUEST_APPROVED = 'PMT_THANHTOAN.REQUEST_APPROVED';

    /** the column name for the REQUEST_CONTRACT field */
    const REQUEST_CONTRACT = 'PMT_THANHTOAN.REQUEST_CONTRACT';

    /** the column name for the REQUEST_ID field */
    const REQUEST_ID = 'PMT_THANHTOAN.REQUEST_ID';

    /** the column name for the REQUEST_TYPE field */
    const REQUEST_TYPE = 'PMT_THANHTOAN.REQUEST_TYPE';

    /** the column name for the SALEUSER field */
    const SALEUSER = 'PMT_THANHTOAN.SALEUSER';

    /** the column name for the SEARCH_FLOW_ID_BY_NAME field */
    const SEARCH_FLOW_ID_BY_NAME = 'PMT_THANHTOAN.SEARCH_FLOW_ID_BY_NAME';

    /** the column name for the SUMMARY field */
    const SUMMARY = 'PMT_THANHTOAN.SUMMARY';

    /** the column name for the SUPPLIER_CODE field */
    const SUPPLIER_CODE = 'PMT_THANHTOAN.SUPPLIER_CODE';

    /** the column name for the SUPPLIER_NAME field */
    const SUPPLIER_NAME = 'PMT_THANHTOAN.SUPPLIER_NAME';

    /** the column name for the USER_CONFIRM field */
    const USER_CONFIRM = 'PMT_THANHTOAN.USER_CONFIRM';

    /** the column name for the SUPPLIER_PAYMENT_INFO field */
    const SUPPLIER_PAYMENT_INFO = 'PMT_THANHTOAN.SUPPLIER_PAYMENT_INFO';

    /** the column name for the USER_CONFIRM_NOTE field */
    const USER_CONFIRM_NOTE = 'PMT_THANHTOAN.USER_CONFIRM_NOTE';

    /** the column name for the USER_NOTE field */
    const USER_NOTE = 'PMT_THANHTOAN.USER_NOTE';

    /** The PHP to DB Name Mapping */
    private static $phpNameMap = null;


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    private static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid', 'AppNumber', 'AppStatus', 'AccountingApprove', 'AccountingApproveLabel', 'AccountingNote', 'AccountingNoteLabel', 'BudgetCostItem', 'BudgetDepartment', 'ContractFile', 'ContractName', 'ContractNo', 'ContractType', 'CostItemLv2', 'CostItemLv3', 'Createuser', 'Currentdepartment', 'DateClose', 'DateOpen', 'Department', 'Description', 'ErpId', 'ErpReason', 'FlowId', 'Fnauser', 'FnaApprove', 'FnaNote', 'HeadApprove', 'HeadApproveLabel', 'HeadNote', 'HeadNoteLabel', 'Legaluser', 'LineManager', 'LineManager1', 'LineManagerApprove', 'LineManagerApproveLabel', 'LineManagerNote', 'LineManagerNoteLabel', 'PaymentAmount', 'PaymentDate', 'PaymentSummary', 'PaymentSupplier', 'RequestAmount', 'RequestAmountTotal', 'RequestApproved', 'RequestContract', 'RequestId', 'RequestType', 'Saleuser', 'SearchFlowIdByName', 'Summary', 'SupplierCode', 'SupplierName', 'UserConfirm', 'SupplierPaymentInfo', 'UserConfirmNote', 'UserNote', ),
        BasePeer::TYPE_COLNAME => array (PmtThanhtoanPeer::APP_UID, PmtThanhtoanPeer::APP_NUMBER, PmtThanhtoanPeer::APP_STATUS, PmtThanhtoanPeer::ACCOUNTING_APPROVE, PmtThanhtoanPeer::ACCOUNTING_APPROVE_LABEL, PmtThanhtoanPeer::ACCOUNTING_NOTE, PmtThanhtoanPeer::ACCOUNTING_NOTE_LABEL, PmtThanhtoanPeer::BUDGET_COST_ITEM, PmtThanhtoanPeer::BUDGET_DEPARTMENT, PmtThanhtoanPeer::CONTRACT_FILE, PmtThanhtoanPeer::CONTRACT_NAME, PmtThanhtoanPeer::CONTRACT_NO, PmtThanhtoanPeer::CONTRACT_TYPE, PmtThanhtoanPeer::COST_ITEM_LV2, PmtThanhtoanPeer::COST_ITEM_LV3, PmtThanhtoanPeer::CREATEUSER, PmtThanhtoanPeer::CURRENTDEPARTMENT, PmtThanhtoanPeer::DATE_CLOSE, PmtThanhtoanPeer::DATE_OPEN, PmtThanhtoanPeer::DEPARTMENT, PmtThanhtoanPeer::DESCRIPTION, PmtThanhtoanPeer::ERP_ID, PmtThanhtoanPeer::ERP_REASON, PmtThanhtoanPeer::FLOW_ID, PmtThanhtoanPeer::FNAUSER, PmtThanhtoanPeer::FNA_APPROVE, PmtThanhtoanPeer::FNA_NOTE, PmtThanhtoanPeer::HEAD_APPROVE, PmtThanhtoanPeer::HEAD_APPROVE_LABEL, PmtThanhtoanPeer::HEAD_NOTE, PmtThanhtoanPeer::HEAD_NOTE_LABEL, PmtThanhtoanPeer::LEGALUSER, PmtThanhtoanPeer::LINE_MANAGER, PmtThanhtoanPeer::LINE_MANAGER_1, PmtThanhtoanPeer::LINE_MANAGER_APPROVE, PmtThanhtoanPeer::LINE_MANAGER_APPROVE_LABEL, PmtThanhtoanPeer::LINE_MANAGER_NOTE, PmtThanhtoanPeer::LINE_MANAGER_NOTE_LABEL, PmtThanhtoanPeer::PAYMENT_AMOUNT, PmtThanhtoanPeer::PAYMENT_DATE, PmtThanhtoanPeer::PAYMENT_SUMMARY, PmtThanhtoanPeer::PAYMENT_SUPPLIER, PmtThanhtoanPeer::REQUEST_AMOUNT, PmtThanhtoanPeer::REQUEST_AMOUNT_TOTAL, PmtThanhtoanPeer::REQUEST_APPROVED, PmtThanhtoanPeer::REQUEST_CONTRACT, PmtThanhtoanPeer::REQUEST_ID, PmtThanhtoanPeer::REQUEST_TYPE, PmtThanhtoanPeer::SALEUSER, PmtThanhtoanPeer::SEARCH_FLOW_ID_BY_NAME, PmtThanhtoanPeer::SUMMARY, PmtThanhtoanPeer::SUPPLIER_CODE, PmtThanhtoanPeer::SUPPLIER_NAME, PmtThanhtoanPeer::USER_CONFIRM, PmtThanhtoanPeer::SUPPLIER_PAYMENT_INFO, PmtThanhtoanPeer::USER_CONFIRM_NOTE, PmtThanhtoanPeer::USER_NOTE, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID', 'APP_NUMBER', 'APP_STATUS', 'ACCOUNTING_APPROVE', 'ACCOUNTING_APPROVE_LABEL', 'ACCOUNTING_NOTE', 'ACCOUNTING_NOTE_LABEL', 'BUDGET_COST_ITEM', 'BUDGET_DEPARTMENT', 'CONTRACT_FILE', 'CONTRACT_NAME', 'CONTRACT_NO', 'CONTRACT_TYPE', 'COST_ITEM_LV2', 'COST_ITEM_LV3', 'CREATEUSER', 'CURRENTDEPARTMENT', 'DATE_CLOSE', 'DATE_OPEN', 'DEPARTMENT', 'DESCRIPTION', 'ERP_ID', 'ERP_REASON', 'FLOW_ID', 'FNAUSER', 'FNA_APPROVE', 'FNA_NOTE', 'HEAD_APPROVE', 'HEAD_APPROVE_LABEL', 'HEAD_NOTE', 'HEAD_NOTE_LABEL', 'LEGALUSER', 'LINE_MANAGER', 'LINE_MANAGER_1', 'LINE_MANAGER_APPROVE', 'LINE_MANAGER_APPROVE_LABEL', 'LINE_MANAGER_NOTE', 'LINE_MANAGER_NOTE_LABEL', 'PAYMENT_AMOUNT', 'PAYMENT_DATE', 'PAYMENT_SUMMARY', 'PAYMENT_SUPPLIER', 'REQUEST_AMOUNT', 'REQUEST_AMOUNT_TOTAL', 'REQUEST_APPROVED', 'REQUEST_CONTRACT', 'REQUEST_ID', 'REQUEST_TYPE', 'SALEUSER', 'SEARCH_FLOW_ID_BY_NAME', 'SUMMARY', 'SUPPLIER_CODE', 'SUPPLIER_NAME', 'USER_CONFIRM', 'SUPPLIER_PAYMENT_INFO', 'USER_CONFIRM_NOTE', 'USER_NOTE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    private static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid' => 0, 'AppNumber' => 1, 'AppStatus' => 2, 'AccountingApprove' => 3, 'AccountingApproveLabel' => 4, 'AccountingNote' => 5, 'AccountingNoteLabel' => 6, 'BudgetCostItem' => 7, 'BudgetDepartment' => 8, 'ContractFile' => 9, 'ContractName' => 10, 'ContractNo' => 11, 'ContractType' => 12, 'CostItemLv2' => 13, 'CostItemLv3' => 14, 'Createuser' => 15, 'Currentdepartment' => 16, 'DateClose' => 17, 'DateOpen' => 18, 'Department' => 19, 'Description' => 20, 'ErpId' => 21, 'ErpReason' => 22, 'FlowId' => 23, 'Fnauser' => 24, 'FnaApprove' => 25, 'FnaNote' => 26, 'HeadApprove' => 27, 'HeadApproveLabel' => 28, 'HeadNote' => 29, 'HeadNoteLabel' => 30, 'Legaluser' => 31, 'LineManager' => 32, 'LineManager1' => 33, 'LineManagerApprove' => 34, 'LineManagerApproveLabel' => 35, 'LineManagerNote' => 36, 'LineManagerNoteLabel' => 37, 'PaymentAmount' => 38, 'PaymentDate' => 39, 'PaymentSummary' => 40, 'PaymentSupplier' => 41, 'RequestAmount' => 42, 'RequestAmountTotal' => 43, 'RequestApproved' => 44, 'RequestContract' => 45, 'RequestId' => 46, 'RequestType' => 47, 'Saleuser' => 48, 'SearchFlowIdByName' => 49, 'Summary' => 50, 'SupplierCode' => 51, 'SupplierName' => 52, 'UserConfirm' => 53, 'SupplierPaymentInfo' => 54, 'UserConfirmNote' => 55, 'UserNote' => 56, ),
        BasePeer::TYPE_COLNAME => array (PmtThanhtoanPeer::APP_UID => 0, PmtThanhtoanPeer::APP_NUMBER => 1, PmtThanhtoanPeer::APP_STATUS => 2, PmtThanhtoanPeer::ACCOUNTING_APPROVE => 3, PmtThanhtoanPeer::ACCOUNTING_APPROVE_LABEL => 4, PmtThanhtoanPeer::ACCOUNTING_NOTE => 5, PmtThanhtoanPeer::ACCOUNTING_NOTE_LABEL => 6, PmtThanhtoanPeer::BUDGET_COST_ITEM => 7, PmtThanhtoanPeer::BUDGET_DEPARTMENT => 8, PmtThanhtoanPeer::CONTRACT_FILE => 9, PmtThanhtoanPeer::CONTRACT_NAME => 10, PmtThanhtoanPeer::CONTRACT_NO => 11, PmtThanhtoanPeer::CONTRACT_TYPE => 12, PmtThanhtoanPeer::COST_ITEM_LV2 => 13, PmtThanhtoanPeer::COST_ITEM_LV3 => 14, PmtThanhtoanPeer::CREATEUSER => 15, PmtThanhtoanPeer::CURRENTDEPARTMENT => 16, PmtThanhtoanPeer::DATE_CLOSE => 17, PmtThanhtoanPeer::DATE_OPEN => 18, PmtThanhtoanPeer::DEPARTMENT => 19, PmtThanhtoanPeer::DESCRIPTION => 20, PmtThanhtoanPeer::ERP_ID => 21, PmtThanhtoanPeer::ERP_REASON => 22, PmtThanhtoanPeer::FLOW_ID => 23, PmtThanhtoanPeer::FNAUSER => 24, PmtThanhtoanPeer::FNA_APPROVE => 25, PmtThanhtoanPeer::FNA_NOTE => 26, PmtThanhtoanPeer::HEAD_APPROVE => 27, PmtThanhtoanPeer::HEAD_APPROVE_LABEL => 28, PmtThanhtoanPeer::HEAD_NOTE => 29, PmtThanhtoanPeer::HEAD_NOTE_LABEL => 30, PmtThanhtoanPeer::LEGALUSER => 31, PmtThanhtoanPeer::LINE_MANAGER => 32, PmtThanhtoanPeer::LINE_MANAGER_1 => 33, PmtThanhtoanPeer::LINE_MANAGER_APPROVE => 34, PmtThanhtoanPeer::LINE_MANAGER_APPROVE_LABEL => 35, PmtThanhtoanPeer::LINE_MANAGER_NOTE => 36, PmtThanhtoanPeer::LINE_MANAGER_NOTE_LABEL => 37, PmtThanhtoanPeer::PAYMENT_AMOUNT => 38, PmtThanhtoanPeer::PAYMENT_DATE => 39, PmtThanhtoanPeer::PAYMENT_SUMMARY => 40, PmtThanhtoanPeer::PAYMENT_SUPPLIER => 41, PmtThanhtoanPeer::REQUEST_AMOUNT => 42, PmtThanhtoanPeer::REQUEST_AMOUNT_TOTAL => 43, PmtThanhtoanPeer::REQUEST_APPROVED => 44, PmtThanhtoanPeer::REQUEST_CONTRACT => 45, PmtThanhtoanPeer::REQUEST_ID => 46, PmtThanhtoanPeer::REQUEST_TYPE => 47, PmtThanhtoanPeer::SALEUSER => 48, PmtThanhtoanPeer::SEARCH_FLOW_ID_BY_NAME => 49, PmtThanhtoanPeer::SUMMARY => 50, PmtThanhtoanPeer::SUPPLIER_CODE => 51, PmtThanhtoanPeer::SUPPLIER_NAME => 52, PmtThanhtoanPeer::USER_CONFIRM => 53, PmtThanhtoanPeer::SUPPLIER_PAYMENT_INFO => 54, PmtThanhtoanPeer::USER_CONFIRM_NOTE => 55, PmtThanhtoanPeer::USER_NOTE => 56, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID' => 0, 'APP_NUMBER' => 1, 'APP_STATUS' => 2, 'ACCOUNTING_APPROVE' => 3, 'ACCOUNTING_APPROVE_LABEL' => 4, 'ACCOUNTING_NOTE' => 5, 'ACCOUNTING_NOTE_LABEL' => 6, 'BUDGET_COST_ITEM' => 7, 'BUDGET_DEPARTMENT' => 8, 'CONTRACT_FILE' => 9, 'CONTRACT_NAME' => 10, 'CONTRACT_NO' => 11, 'CONTRACT_TYPE' => 12, 'COST_ITEM_LV2' => 13, 'COST_ITEM_LV3' => 14, 'CREATEUSER' => 15, 'CURRENTDEPARTMENT' => 16, 'DATE_CLOSE' => 17, 'DATE_OPEN' => 18, 'DEPARTMENT' => 19, 'DESCRIPTION' => 20, 'ERP_ID' => 21, 'ERP_REASON' => 22, 'FLOW_ID' => 23, 'FNAUSER' => 24, 'FNA_APPROVE' => 25, 'FNA_NOTE' => 26, 'HEAD_APPROVE' => 27, 'HEAD_APPROVE_LABEL' => 28, 'HEAD_NOTE' => 29, 'HEAD_NOTE_LABEL' => 30, 'LEGALUSER' => 31, 'LINE_MANAGER' => 32, 'LINE_MANAGER_1' => 33, 'LINE_MANAGER_APPROVE' => 34, 'LINE_MANAGER_APPROVE_LABEL' => 35, 'LINE_MANAGER_NOTE' => 36, 'LINE_MANAGER_NOTE_LABEL' => 37, 'PAYMENT_AMOUNT' => 38, 'PAYMENT_DATE' => 39, 'PAYMENT_SUMMARY' => 40, 'PAYMENT_SUPPLIER' => 41, 'REQUEST_AMOUNT' => 42, 'REQUEST_AMOUNT_TOTAL' => 43, 'REQUEST_APPROVED' => 44, 'REQUEST_CONTRACT' => 45, 'REQUEST_ID' => 46, 'REQUEST_TYPE' => 47, 'SALEUSER' => 48, 'SEARCH_FLOW_ID_BY_NAME' => 49, 'SUMMARY' => 50, 'SUPPLIER_CODE' => 51, 'SUPPLIER_NAME' => 52, 'USER_CONFIRM' => 53, 'SUPPLIER_PAYMENT_INFO' => 54, 'USER_CONFIRM_NOTE' => 55, 'USER_NOTE' => 56, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /**
     * @return     MapBuilder the map builder for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getMapBuilder()
    {
        include_once 'classes/map/PmtThanhtoanMapBuilder.php';
        return BasePeer::getMapBuilder('classes.map.PmtThanhtoanMapBuilder');
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
            $map = PmtThanhtoanPeer::getTableMap();
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
     * @param      string $column The column name for current table. (i.e. PmtThanhtoanPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PmtThanhtoanPeer::TABLE_NAME.'.', $alias.'.', $column);
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

        $criteria->addSelectColumn(PmtThanhtoanPeer::APP_UID);

        $criteria->addSelectColumn(PmtThanhtoanPeer::APP_NUMBER);

        $criteria->addSelectColumn(PmtThanhtoanPeer::APP_STATUS);

        $criteria->addSelectColumn(PmtThanhtoanPeer::ACCOUNTING_APPROVE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::ACCOUNTING_APPROVE_LABEL);

        $criteria->addSelectColumn(PmtThanhtoanPeer::ACCOUNTING_NOTE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::ACCOUNTING_NOTE_LABEL);

        $criteria->addSelectColumn(PmtThanhtoanPeer::BUDGET_COST_ITEM);

        $criteria->addSelectColumn(PmtThanhtoanPeer::BUDGET_DEPARTMENT);

        $criteria->addSelectColumn(PmtThanhtoanPeer::CONTRACT_FILE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::CONTRACT_NAME);

        $criteria->addSelectColumn(PmtThanhtoanPeer::CONTRACT_NO);

        $criteria->addSelectColumn(PmtThanhtoanPeer::CONTRACT_TYPE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::COST_ITEM_LV2);

        $criteria->addSelectColumn(PmtThanhtoanPeer::COST_ITEM_LV3);

        $criteria->addSelectColumn(PmtThanhtoanPeer::CREATEUSER);

        $criteria->addSelectColumn(PmtThanhtoanPeer::CURRENTDEPARTMENT);

        $criteria->addSelectColumn(PmtThanhtoanPeer::DATE_CLOSE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::DATE_OPEN);

        $criteria->addSelectColumn(PmtThanhtoanPeer::DEPARTMENT);

        $criteria->addSelectColumn(PmtThanhtoanPeer::DESCRIPTION);

        $criteria->addSelectColumn(PmtThanhtoanPeer::ERP_ID);

        $criteria->addSelectColumn(PmtThanhtoanPeer::ERP_REASON);

        $criteria->addSelectColumn(PmtThanhtoanPeer::FLOW_ID);

        $criteria->addSelectColumn(PmtThanhtoanPeer::FNAUSER);

        $criteria->addSelectColumn(PmtThanhtoanPeer::FNA_APPROVE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::FNA_NOTE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::HEAD_APPROVE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::HEAD_APPROVE_LABEL);

        $criteria->addSelectColumn(PmtThanhtoanPeer::HEAD_NOTE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::HEAD_NOTE_LABEL);

        $criteria->addSelectColumn(PmtThanhtoanPeer::LEGALUSER);

        $criteria->addSelectColumn(PmtThanhtoanPeer::LINE_MANAGER);

        $criteria->addSelectColumn(PmtThanhtoanPeer::LINE_MANAGER_1);

        $criteria->addSelectColumn(PmtThanhtoanPeer::LINE_MANAGER_APPROVE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::LINE_MANAGER_APPROVE_LABEL);

        $criteria->addSelectColumn(PmtThanhtoanPeer::LINE_MANAGER_NOTE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::LINE_MANAGER_NOTE_LABEL);

        $criteria->addSelectColumn(PmtThanhtoanPeer::PAYMENT_AMOUNT);

        $criteria->addSelectColumn(PmtThanhtoanPeer::PAYMENT_DATE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::PAYMENT_SUMMARY);

        $criteria->addSelectColumn(PmtThanhtoanPeer::PAYMENT_SUPPLIER);

        $criteria->addSelectColumn(PmtThanhtoanPeer::REQUEST_AMOUNT);

        $criteria->addSelectColumn(PmtThanhtoanPeer::REQUEST_AMOUNT_TOTAL);

        $criteria->addSelectColumn(PmtThanhtoanPeer::REQUEST_APPROVED);

        $criteria->addSelectColumn(PmtThanhtoanPeer::REQUEST_CONTRACT);

        $criteria->addSelectColumn(PmtThanhtoanPeer::REQUEST_ID);

        $criteria->addSelectColumn(PmtThanhtoanPeer::REQUEST_TYPE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::SALEUSER);

        $criteria->addSelectColumn(PmtThanhtoanPeer::SEARCH_FLOW_ID_BY_NAME);

        $criteria->addSelectColumn(PmtThanhtoanPeer::SUMMARY);

        $criteria->addSelectColumn(PmtThanhtoanPeer::SUPPLIER_CODE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::SUPPLIER_NAME);

        $criteria->addSelectColumn(PmtThanhtoanPeer::USER_CONFIRM);

        $criteria->addSelectColumn(PmtThanhtoanPeer::SUPPLIER_PAYMENT_INFO);

        $criteria->addSelectColumn(PmtThanhtoanPeer::USER_CONFIRM_NOTE);

        $criteria->addSelectColumn(PmtThanhtoanPeer::USER_NOTE);

    }

    const COUNT = 'COUNT(PMT_THANHTOAN.APP_UID)';
    const COUNT_DISTINCT = 'COUNT(DISTINCT PMT_THANHTOAN.APP_UID)';

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
            $criteria->addSelectColumn(PmtThanhtoanPeer::COUNT_DISTINCT);
        } else {
            $criteria->addSelectColumn(PmtThanhtoanPeer::COUNT);
        }

        // just in case we're grouping: add those columns to the select statement
        foreach ($criteria->getGroupByColumns() as $column) {
            $criteria->addSelectColumn($column);
        }

        $rs = PmtThanhtoanPeer::doSelectRS($criteria, $con);
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
     * @return     PmtThanhtoan
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PmtThanhtoanPeer::doSelect($critcopy, $con);
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
        return PmtThanhtoanPeer::populateObjects(PmtThanhtoanPeer::doSelectRS($criteria, $con));
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
            PmtThanhtoanPeer::addSelectColumns($criteria);
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
        $cls = PmtThanhtoanPeer::getOMClass();
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
        return PmtThanhtoanPeer::CLASS_DEFAULT;
    }

    /**
     * Method perform an INSERT on the database, given a PmtThanhtoan or Criteria object.
     *
     * @param      mixed $values Criteria or PmtThanhtoan object containing data that is used to create the INSERT statement.
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
            $criteria = $values->buildCriteria(); // build Criteria from PmtThanhtoan object
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
     * Method perform an UPDATE on the database, given a PmtThanhtoan or Criteria object.
     *
     * @param      mixed $values Criteria or PmtThanhtoan object containing data create the UPDATE statement.
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

            $comparison = $criteria->getComparison(PmtThanhtoanPeer::APP_UID);
            $selectCriteria->add(PmtThanhtoanPeer::APP_UID, $criteria->remove(PmtThanhtoanPeer::APP_UID), $comparison);

        } else {
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Method to DELETE all rows from the PMT_THANHTOAN table.
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
            $affectedRows += BasePeer::doDeleteAll(PmtThanhtoanPeer::TABLE_NAME, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Method perform a DELETE on the database, given a PmtThanhtoan or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PmtThanhtoan object or primary key or array of primary keys
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
            $con = Propel::getConnection(PmtThanhtoanPeer::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } elseif ($values instanceof PmtThanhtoan) {

            $criteria = $values->buildPkeyCriteria();
        } else {
            // it must be the primary key
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(PmtThanhtoanPeer::APP_UID, (array) $values, Criteria::IN);
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
     * Validates all modified columns of given PmtThanhtoan object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      PmtThanhtoan $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate(PmtThanhtoan $obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PmtThanhtoanPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PmtThanhtoanPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PmtThanhtoanPeer::DATABASE_NAME, PmtThanhtoanPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      mixed $pk the primary key.
     * @param      Connection $con the connection to use
     * @return     PmtThanhtoan
     */
    public static function retrieveByPK($pk, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $criteria = new Criteria(PmtThanhtoanPeer::DATABASE_NAME);

        $criteria->add(PmtThanhtoanPeer::APP_UID, $pk);


        $v = PmtThanhtoanPeer::doSelect($criteria, $con);

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
            $criteria->add(PmtThanhtoanPeer::APP_UID, $pks, Criteria::IN);
            $objs = PmtThanhtoanPeer::doSelect($criteria, $con);
        }
        return $objs;
    }
}


// static code to register the map builder for this Peer with the main Propel class
if (Propel::isInit()) {
    // the MapBuilder classes register themselves with Propel during initialization
    // so we need to load them here.
    try {
        BasePmtThanhtoanPeer::getMapBuilder();
    } catch (Exception $e) {
        Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
    }
} else {
    // even if Propel is not yet initialized, the map builder class can be registered
    // now and then it will be loaded when Propel initializes.
    require_once 'classes/map/PmtThanhtoanMapBuilder.php';
    Propel::registerMapBuilder('classes.map.PmtThanhtoanMapBuilder');
}

