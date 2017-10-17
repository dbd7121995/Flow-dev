<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'classes/PmtThanhtoanPeer.php';

/**
 * Base class that represents a row from the 'PMT_THANHTOAN' table.
 *
 * 
 *
 * @package    workflow.classes.om
 */
abstract class BasePmtThanhtoan extends BaseObject implements Persistent
{

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PmtThanhtoanPeer
    */
    protected static $peer;

    /**
     * The value for the app_uid field.
     * @var        string
     */
    protected $app_uid;

    /**
     * The value for the app_number field.
     * @var        int
     */
    protected $app_number;

    /**
     * The value for the app_status field.
     * @var        string
     */
    protected $app_status;

    /**
     * The value for the accounting_approve field.
     * @var        string
     */
    protected $accounting_approve;

    /**
     * The value for the accounting_approve_label field.
     * @var        string
     */
    protected $accounting_approve_label;

    /**
     * The value for the accounting_note field.
     * @var        string
     */
    protected $accounting_note;

    /**
     * The value for the accounting_note_label field.
     * @var        string
     */
    protected $accounting_note_label;

    /**
     * The value for the budget_cost_item field.
     * @var        double
     */
    protected $budget_cost_item;

    /**
     * The value for the budget_department field.
     * @var        double
     */
    protected $budget_department;

    /**
     * The value for the contract_file field.
     * @var        string
     */
    protected $contract_file;

    /**
     * The value for the contract_name field.
     * @var        string
     */
    protected $contract_name;

    /**
     * The value for the contract_no field.
     * @var        string
     */
    protected $contract_no;

    /**
     * The value for the contract_type field.
     * @var        string
     */
    protected $contract_type;

    /**
     * The value for the cost_item_lv2 field.
     * @var        string
     */
    protected $cost_item_lv2;

    /**
     * The value for the cost_item_lv3 field.
     * @var        string
     */
    protected $cost_item_lv3;

    /**
     * The value for the createuser field.
     * @var        string
     */
    protected $createuser;

    /**
     * The value for the currentdepartment field.
     * @var        string
     */
    protected $currentdepartment;

    /**
     * The value for the date_close field.
     * @var        string
     */
    protected $date_close;

    /**
     * The value for the date_open field.
     * @var        string
     */
    protected $date_open;

    /**
     * The value for the department field.
     * @var        string
     */
    protected $department;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the erp_id field.
     * @var        double
     */
    protected $erp_id;

    /**
     * The value for the erp_reason field.
     * @var        string
     */
    protected $erp_reason;

    /**
     * The value for the flow_id field.
     * @var        string
     */
    protected $flow_id;

    /**
     * The value for the fnauser field.
     * @var        string
     */
    protected $fnauser;

    /**
     * The value for the fna_approve field.
     * @var        int
     */
    protected $fna_approve;

    /**
     * The value for the fna_note field.
     * @var        string
     */
    protected $fna_note;

    /**
     * The value for the head_approve field.
     * @var        int
     */
    protected $head_approve;

    /**
     * The value for the head_approve_label field.
     * @var        string
     */
    protected $head_approve_label;

    /**
     * The value for the head_note field.
     * @var        string
     */
    protected $head_note;

    /**
     * The value for the head_note_label field.
     * @var        string
     */
    protected $head_note_label;

    /**
     * The value for the legaluser field.
     * @var        string
     */
    protected $legaluser;

    /**
     * The value for the line_manager field.
     * @var        string
     */
    protected $line_manager;

    /**
     * The value for the line_manager_1 field.
     * @var        string
     */
    protected $line_manager_1;

    /**
     * The value for the line_manager_approve field.
     * @var        string
     */
    protected $line_manager_approve;

    /**
     * The value for the line_manager_approve_label field.
     * @var        string
     */
    protected $line_manager_approve_label;

    /**
     * The value for the line_manager_note field.
     * @var        string
     */
    protected $line_manager_note;

    /**
     * The value for the line_manager_note_label field.
     * @var        string
     */
    protected $line_manager_note_label;

    /**
     * The value for the payment_amount field.
     * @var        string
     */
    protected $payment_amount;

    /**
     * The value for the payment_date field.
     * @var        string
     */
    protected $payment_date;

    /**
     * The value for the payment_summary field.
     * @var        string
     */
    protected $payment_summary;

    /**
     * The value for the payment_supplier field.
     * @var        string
     */
    protected $payment_supplier;

    /**
     * The value for the request_amount field.
     * @var        string
     */
    protected $request_amount;

    /**
     * The value for the request_amount_total field.
     * @var        string
     */
    protected $request_amount_total;

    /**
     * The value for the request_approved field.
     * @var        int
     */
    protected $request_approved;

    /**
     * The value for the request_contract field.
     * @var        string
     */
    protected $request_contract;

    /**
     * The value for the request_id field.
     * @var        string
     */
    protected $request_id;

    /**
     * The value for the request_type field.
     * @var        string
     */
    protected $request_type;

    /**
     * The value for the saleuser field.
     * @var        string
     */
    protected $saleuser;

    /**
     * The value for the search_flow_id_by_name field.
     * @var        string
     */
    protected $search_flow_id_by_name;

    /**
     * The value for the summary field.
     * @var        string
     */
    protected $summary;

    /**
     * The value for the supplier_code field.
     * @var        string
     */
    protected $supplier_code;

    /**
     * The value for the supplier_name field.
     * @var        string
     */
    protected $supplier_name;

    /**
     * The value for the user_confirm field.
     * @var        int
     */
    protected $user_confirm;

    /**
     * The value for the supplier_payment_info field.
     * @var        string
     */
    protected $supplier_payment_info;

    /**
     * The value for the user_confirm_note field.
     * @var        string
     */
    protected $user_confirm_note;

    /**
     * The value for the user_note field.
     * @var        string
     */
    protected $user_note;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Get the [app_uid] column value.
     * 
     * @return     string
     */
    public function getAppUid()
    {

        return $this->app_uid;
    }

    /**
     * Get the [app_number] column value.
     * 
     * @return     int
     */
    public function getAppNumber()
    {

        return $this->app_number;
    }

    /**
     * Get the [app_status] column value.
     * 
     * @return     string
     */
    public function getAppStatus()
    {

        return $this->app_status;
    }

    /**
     * Get the [accounting_approve] column value.
     * 
     * @return     string
     */
    public function getAccountingApprove()
    {

        return $this->accounting_approve;
    }

    /**
     * Get the [accounting_approve_label] column value.
     * 
     * @return     string
     */
    public function getAccountingApproveLabel()
    {

        return $this->accounting_approve_label;
    }

    /**
     * Get the [accounting_note] column value.
     * 
     * @return     string
     */
    public function getAccountingNote()
    {

        return $this->accounting_note;
    }

    /**
     * Get the [accounting_note_label] column value.
     * 
     * @return     string
     */
    public function getAccountingNoteLabel()
    {

        return $this->accounting_note_label;
    }

    /**
     * Get the [budget_cost_item] column value.
     * 
     * @return     double
     */
    public function getBudgetCostItem()
    {

        return $this->budget_cost_item;
    }

    /**
     * Get the [budget_department] column value.
     * 
     * @return     double
     */
    public function getBudgetDepartment()
    {

        return $this->budget_department;
    }

    /**
     * Get the [contract_file] column value.
     * 
     * @return     string
     */
    public function getContractFile()
    {

        return $this->contract_file;
    }

    /**
     * Get the [contract_name] column value.
     * 
     * @return     string
     */
    public function getContractName()
    {

        return $this->contract_name;
    }

    /**
     * Get the [contract_no] column value.
     * 
     * @return     string
     */
    public function getContractNo()
    {

        return $this->contract_no;
    }

    /**
     * Get the [contract_type] column value.
     * 
     * @return     string
     */
    public function getContractType()
    {

        return $this->contract_type;
    }

    /**
     * Get the [cost_item_lv2] column value.
     * 
     * @return     string
     */
    public function getCostItemLv2()
    {

        return $this->cost_item_lv2;
    }

    /**
     * Get the [cost_item_lv3] column value.
     * 
     * @return     string
     */
    public function getCostItemLv3()
    {

        return $this->cost_item_lv3;
    }

    /**
     * Get the [createuser] column value.
     * 
     * @return     string
     */
    public function getCreateuser()
    {

        return $this->createuser;
    }

    /**
     * Get the [currentdepartment] column value.
     * 
     * @return     string
     */
    public function getCurrentdepartment()
    {

        return $this->currentdepartment;
    }

    /**
     * Get the [date_close] column value.
     * 
     * @return     string
     */
    public function getDateClose()
    {

        return $this->date_close;
    }

    /**
     * Get the [date_open] column value.
     * 
     * @return     string
     */
    public function getDateOpen()
    {

        return $this->date_open;
    }

    /**
     * Get the [department] column value.
     * 
     * @return     string
     */
    public function getDepartment()
    {

        return $this->department;
    }

    /**
     * Get the [description] column value.
     * 
     * @return     string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [erp_id] column value.
     * 
     * @return     double
     */
    public function getErpId()
    {

        return $this->erp_id;
    }

    /**
     * Get the [erp_reason] column value.
     * 
     * @return     string
     */
    public function getErpReason()
    {

        return $this->erp_reason;
    }

    /**
     * Get the [flow_id] column value.
     * 
     * @return     string
     */
    public function getFlowId()
    {

        return $this->flow_id;
    }

    /**
     * Get the [fnauser] column value.
     * 
     * @return     string
     */
    public function getFnauser()
    {

        return $this->fnauser;
    }

    /**
     * Get the [fna_approve] column value.
     * 
     * @return     int
     */
    public function getFnaApprove()
    {

        return $this->fna_approve;
    }

    /**
     * Get the [fna_note] column value.
     * 
     * @return     string
     */
    public function getFnaNote()
    {

        return $this->fna_note;
    }

    /**
     * Get the [head_approve] column value.
     * 
     * @return     int
     */
    public function getHeadApprove()
    {

        return $this->head_approve;
    }

    /**
     * Get the [head_approve_label] column value.
     * 
     * @return     string
     */
    public function getHeadApproveLabel()
    {

        return $this->head_approve_label;
    }

    /**
     * Get the [head_note] column value.
     * 
     * @return     string
     */
    public function getHeadNote()
    {

        return $this->head_note;
    }

    /**
     * Get the [head_note_label] column value.
     * 
     * @return     string
     */
    public function getHeadNoteLabel()
    {

        return $this->head_note_label;
    }

    /**
     * Get the [legaluser] column value.
     * 
     * @return     string
     */
    public function getLegaluser()
    {

        return $this->legaluser;
    }

    /**
     * Get the [line_manager] column value.
     * 
     * @return     string
     */
    public function getLineManager()
    {

        return $this->line_manager;
    }

    /**
     * Get the [line_manager_1] column value.
     * 
     * @return     string
     */
    public function getLineManager1()
    {

        return $this->line_manager_1;
    }

    /**
     * Get the [line_manager_approve] column value.
     * 
     * @return     string
     */
    public function getLineManagerApprove()
    {

        return $this->line_manager_approve;
    }

    /**
     * Get the [line_manager_approve_label] column value.
     * 
     * @return     string
     */
    public function getLineManagerApproveLabel()
    {

        return $this->line_manager_approve_label;
    }

    /**
     * Get the [line_manager_note] column value.
     * 
     * @return     string
     */
    public function getLineManagerNote()
    {

        return $this->line_manager_note;
    }

    /**
     * Get the [line_manager_note_label] column value.
     * 
     * @return     string
     */
    public function getLineManagerNoteLabel()
    {

        return $this->line_manager_note_label;
    }

    /**
     * Get the [payment_amount] column value.
     * 
     * @return     string
     */
    public function getPaymentAmount()
    {

        return $this->payment_amount;
    }

    /**
     * Get the [payment_date] column value.
     * 
     * @return     string
     */
    public function getPaymentDate()
    {

        return $this->payment_date;
    }

    /**
     * Get the [payment_summary] column value.
     * 
     * @return     string
     */
    public function getPaymentSummary()
    {

        return $this->payment_summary;
    }

    /**
     * Get the [payment_supplier] column value.
     * 
     * @return     string
     */
    public function getPaymentSupplier()
    {

        return $this->payment_supplier;
    }

    /**
     * Get the [request_amount] column value.
     * 
     * @return     string
     */
    public function getRequestAmount()
    {

        return $this->request_amount;
    }

    /**
     * Get the [request_amount_total] column value.
     * 
     * @return     string
     */
    public function getRequestAmountTotal()
    {

        return $this->request_amount_total;
    }

    /**
     * Get the [request_approved] column value.
     * 
     * @return     int
     */
    public function getRequestApproved()
    {

        return $this->request_approved;
    }

    /**
     * Get the [request_contract] column value.
     * 
     * @return     string
     */
    public function getRequestContract()
    {

        return $this->request_contract;
    }

    /**
     * Get the [request_id] column value.
     * 
     * @return     string
     */
    public function getRequestId()
    {

        return $this->request_id;
    }

    /**
     * Get the [request_type] column value.
     * 
     * @return     string
     */
    public function getRequestType()
    {

        return $this->request_type;
    }

    /**
     * Get the [saleuser] column value.
     * 
     * @return     string
     */
    public function getSaleuser()
    {

        return $this->saleuser;
    }

    /**
     * Get the [search_flow_id_by_name] column value.
     * 
     * @return     string
     */
    public function getSearchFlowIdByName()
    {

        return $this->search_flow_id_by_name;
    }

    /**
     * Get the [summary] column value.
     * 
     * @return     string
     */
    public function getSummary()
    {

        return $this->summary;
    }

    /**
     * Get the [supplier_code] column value.
     * 
     * @return     string
     */
    public function getSupplierCode()
    {

        return $this->supplier_code;
    }

    /**
     * Get the [supplier_name] column value.
     * 
     * @return     string
     */
    public function getSupplierName()
    {

        return $this->supplier_name;
    }

    /**
     * Get the [user_confirm] column value.
     * 
     * @return     int
     */
    public function getUserConfirm()
    {

        return $this->user_confirm;
    }

    /**
     * Get the [supplier_payment_info] column value.
     * 
     * @return     string
     */
    public function getSupplierPaymentInfo()
    {

        return $this->supplier_payment_info;
    }

    /**
     * Get the [user_confirm_note] column value.
     * 
     * @return     string
     */
    public function getUserConfirmNote()
    {

        return $this->user_confirm_note;
    }

    /**
     * Get the [user_note] column value.
     * 
     * @return     string
     */
    public function getUserNote()
    {

        return $this->user_note;
    }

    /**
     * Set the value of [app_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAppUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->app_uid !== $v) {
            $this->app_uid = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::APP_UID;
        }

    } // setAppUid()

    /**
     * Set the value of [app_number] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setAppNumber($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->app_number !== $v) {
            $this->app_number = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::APP_NUMBER;
        }

    } // setAppNumber()

    /**
     * Set the value of [app_status] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAppStatus($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->app_status !== $v) {
            $this->app_status = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::APP_STATUS;
        }

    } // setAppStatus()

    /**
     * Set the value of [accounting_approve] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAccountingApprove($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->accounting_approve !== $v) {
            $this->accounting_approve = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::ACCOUNTING_APPROVE;
        }

    } // setAccountingApprove()

    /**
     * Set the value of [accounting_approve_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAccountingApproveLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->accounting_approve_label !== $v) {
            $this->accounting_approve_label = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::ACCOUNTING_APPROVE_LABEL;
        }

    } // setAccountingApproveLabel()

    /**
     * Set the value of [accounting_note] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAccountingNote($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->accounting_note !== $v) {
            $this->accounting_note = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::ACCOUNTING_NOTE;
        }

    } // setAccountingNote()

    /**
     * Set the value of [accounting_note_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAccountingNoteLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->accounting_note_label !== $v) {
            $this->accounting_note_label = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::ACCOUNTING_NOTE_LABEL;
        }

    } // setAccountingNoteLabel()

    /**
     * Set the value of [budget_cost_item] column.
     * 
     * @param      double $v new value
     * @return     void
     */
    public function setBudgetCostItem($v)
    {

        if ($this->budget_cost_item !== $v) {
            $this->budget_cost_item = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::BUDGET_COST_ITEM;
        }

    } // setBudgetCostItem()

    /**
     * Set the value of [budget_department] column.
     * 
     * @param      double $v new value
     * @return     void
     */
    public function setBudgetDepartment($v)
    {

        if ($this->budget_department !== $v) {
            $this->budget_department = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::BUDGET_DEPARTMENT;
        }

    } // setBudgetDepartment()

    /**
     * Set the value of [contract_file] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setContractFile($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->contract_file !== $v) {
            $this->contract_file = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::CONTRACT_FILE;
        }

    } // setContractFile()

    /**
     * Set the value of [contract_name] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setContractName($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->contract_name !== $v) {
            $this->contract_name = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::CONTRACT_NAME;
        }

    } // setContractName()

    /**
     * Set the value of [contract_no] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setContractNo($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->contract_no !== $v) {
            $this->contract_no = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::CONTRACT_NO;
        }

    } // setContractNo()

    /**
     * Set the value of [contract_type] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setContractType($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->contract_type !== $v) {
            $this->contract_type = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::CONTRACT_TYPE;
        }

    } // setContractType()

    /**
     * Set the value of [cost_item_lv2] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setCostItemLv2($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->cost_item_lv2 !== $v) {
            $this->cost_item_lv2 = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::COST_ITEM_LV2;
        }

    } // setCostItemLv2()

    /**
     * Set the value of [cost_item_lv3] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setCostItemLv3($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->cost_item_lv3 !== $v) {
            $this->cost_item_lv3 = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::COST_ITEM_LV3;
        }

    } // setCostItemLv3()

    /**
     * Set the value of [createuser] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setCreateuser($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->createuser !== $v) {
            $this->createuser = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::CREATEUSER;
        }

    } // setCreateuser()

    /**
     * Set the value of [currentdepartment] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setCurrentdepartment($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->currentdepartment !== $v) {
            $this->currentdepartment = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::CURRENTDEPARTMENT;
        }

    } // setCurrentdepartment()

    /**
     * Set the value of [date_close] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setDateClose($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->date_close !== $v) {
            $this->date_close = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::DATE_CLOSE;
        }

    } // setDateClose()

    /**
     * Set the value of [date_open] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setDateOpen($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->date_open !== $v) {
            $this->date_open = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::DATE_OPEN;
        }

    } // setDateOpen()

    /**
     * Set the value of [department] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setDepartment($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->department !== $v) {
            $this->department = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::DEPARTMENT;
        }

    } // setDepartment()

    /**
     * Set the value of [description] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setDescription($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::DESCRIPTION;
        }

    } // setDescription()

    /**
     * Set the value of [erp_id] column.
     * 
     * @param      double $v new value
     * @return     void
     */
    public function setErpId($v)
    {

        if ($this->erp_id !== $v) {
            $this->erp_id = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::ERP_ID;
        }

    } // setErpId()

    /**
     * Set the value of [erp_reason] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setErpReason($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->erp_reason !== $v) {
            $this->erp_reason = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::ERP_REASON;
        }

    } // setErpReason()

    /**
     * Set the value of [flow_id] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setFlowId($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->flow_id !== $v) {
            $this->flow_id = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::FLOW_ID;
        }

    } // setFlowId()

    /**
     * Set the value of [fnauser] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setFnauser($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->fnauser !== $v) {
            $this->fnauser = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::FNAUSER;
        }

    } // setFnauser()

    /**
     * Set the value of [fna_approve] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setFnaApprove($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fna_approve !== $v) {
            $this->fna_approve = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::FNA_APPROVE;
        }

    } // setFnaApprove()

    /**
     * Set the value of [fna_note] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setFnaNote($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->fna_note !== $v) {
            $this->fna_note = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::FNA_NOTE;
        }

    } // setFnaNote()

    /**
     * Set the value of [head_approve] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setHeadApprove($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->head_approve !== $v) {
            $this->head_approve = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::HEAD_APPROVE;
        }

    } // setHeadApprove()

    /**
     * Set the value of [head_approve_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setHeadApproveLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->head_approve_label !== $v) {
            $this->head_approve_label = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::HEAD_APPROVE_LABEL;
        }

    } // setHeadApproveLabel()

    /**
     * Set the value of [head_note] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setHeadNote($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->head_note !== $v) {
            $this->head_note = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::HEAD_NOTE;
        }

    } // setHeadNote()

    /**
     * Set the value of [head_note_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setHeadNoteLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->head_note_label !== $v) {
            $this->head_note_label = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::HEAD_NOTE_LABEL;
        }

    } // setHeadNoteLabel()

    /**
     * Set the value of [legaluser] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setLegaluser($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->legaluser !== $v) {
            $this->legaluser = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::LEGALUSER;
        }

    } // setLegaluser()

    /**
     * Set the value of [line_manager] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setLineManager($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->line_manager !== $v) {
            $this->line_manager = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::LINE_MANAGER;
        }

    } // setLineManager()

    /**
     * Set the value of [line_manager_1] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setLineManager1($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->line_manager_1 !== $v) {
            $this->line_manager_1 = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::LINE_MANAGER_1;
        }

    } // setLineManager1()

    /**
     * Set the value of [line_manager_approve] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setLineManagerApprove($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->line_manager_approve !== $v) {
            $this->line_manager_approve = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::LINE_MANAGER_APPROVE;
        }

    } // setLineManagerApprove()

    /**
     * Set the value of [line_manager_approve_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setLineManagerApproveLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->line_manager_approve_label !== $v) {
            $this->line_manager_approve_label = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::LINE_MANAGER_APPROVE_LABEL;
        }

    } // setLineManagerApproveLabel()

    /**
     * Set the value of [line_manager_note] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setLineManagerNote($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->line_manager_note !== $v) {
            $this->line_manager_note = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::LINE_MANAGER_NOTE;
        }

    } // setLineManagerNote()

    /**
     * Set the value of [line_manager_note_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setLineManagerNoteLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->line_manager_note_label !== $v) {
            $this->line_manager_note_label = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::LINE_MANAGER_NOTE_LABEL;
        }

    } // setLineManagerNoteLabel()

    /**
     * Set the value of [payment_amount] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setPaymentAmount($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->payment_amount !== $v) {
            $this->payment_amount = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::PAYMENT_AMOUNT;
        }

    } // setPaymentAmount()

    /**
     * Set the value of [payment_date] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setPaymentDate($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->payment_date !== $v) {
            $this->payment_date = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::PAYMENT_DATE;
        }

    } // setPaymentDate()

    /**
     * Set the value of [payment_summary] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setPaymentSummary($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->payment_summary !== $v) {
            $this->payment_summary = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::PAYMENT_SUMMARY;
        }

    } // setPaymentSummary()

    /**
     * Set the value of [payment_supplier] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setPaymentSupplier($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->payment_supplier !== $v) {
            $this->payment_supplier = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::PAYMENT_SUPPLIER;
        }

    } // setPaymentSupplier()

    /**
     * Set the value of [request_amount] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setRequestAmount($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->request_amount !== $v) {
            $this->request_amount = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::REQUEST_AMOUNT;
        }

    } // setRequestAmount()

    /**
     * Set the value of [request_amount_total] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setRequestAmountTotal($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->request_amount_total !== $v) {
            $this->request_amount_total = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::REQUEST_AMOUNT_TOTAL;
        }

    } // setRequestAmountTotal()

    /**
     * Set the value of [request_approved] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setRequestApproved($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->request_approved !== $v) {
            $this->request_approved = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::REQUEST_APPROVED;
        }

    } // setRequestApproved()

    /**
     * Set the value of [request_contract] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setRequestContract($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->request_contract !== $v) {
            $this->request_contract = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::REQUEST_CONTRACT;
        }

    } // setRequestContract()

    /**
     * Set the value of [request_id] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setRequestId($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->request_id !== $v) {
            $this->request_id = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::REQUEST_ID;
        }

    } // setRequestId()

    /**
     * Set the value of [request_type] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setRequestType($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->request_type !== $v) {
            $this->request_type = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::REQUEST_TYPE;
        }

    } // setRequestType()

    /**
     * Set the value of [saleuser] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setSaleuser($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->saleuser !== $v) {
            $this->saleuser = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::SALEUSER;
        }

    } // setSaleuser()

    /**
     * Set the value of [search_flow_id_by_name] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setSearchFlowIdByName($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->search_flow_id_by_name !== $v) {
            $this->search_flow_id_by_name = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::SEARCH_FLOW_ID_BY_NAME;
        }

    } // setSearchFlowIdByName()

    /**
     * Set the value of [summary] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setSummary($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->summary !== $v) {
            $this->summary = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::SUMMARY;
        }

    } // setSummary()

    /**
     * Set the value of [supplier_code] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setSupplierCode($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->supplier_code !== $v) {
            $this->supplier_code = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::SUPPLIER_CODE;
        }

    } // setSupplierCode()

    /**
     * Set the value of [supplier_name] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setSupplierName($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->supplier_name !== $v) {
            $this->supplier_name = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::SUPPLIER_NAME;
        }

    } // setSupplierName()

    /**
     * Set the value of [user_confirm] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setUserConfirm($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_confirm !== $v) {
            $this->user_confirm = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::USER_CONFIRM;
        }

    } // setUserConfirm()

    /**
     * Set the value of [supplier_payment_info] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setSupplierPaymentInfo($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->supplier_payment_info !== $v) {
            $this->supplier_payment_info = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::SUPPLIER_PAYMENT_INFO;
        }

    } // setSupplierPaymentInfo()

    /**
     * Set the value of [user_confirm_note] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setUserConfirmNote($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->user_confirm_note !== $v) {
            $this->user_confirm_note = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::USER_CONFIRM_NOTE;
        }

    } // setUserConfirmNote()

    /**
     * Set the value of [user_note] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setUserNote($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->user_note !== $v) {
            $this->user_note = $v;
            $this->modifiedColumns[] = PmtThanhtoanPeer::USER_NOTE;
        }

    } // setUserNote()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (1-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      ResultSet $rs The ResultSet class with cursor advanced to desired record pos.
     * @param      int $startcol 1-based offset column which indicates which restultset column to start with.
     * @return     int next starting column
     * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(ResultSet $rs, $startcol = 1)
    {
        try {

            $this->app_uid = $rs->getString($startcol + 0);

            $this->app_number = $rs->getInt($startcol + 1);

            $this->app_status = $rs->getString($startcol + 2);

            $this->accounting_approve = $rs->getString($startcol + 3);

            $this->accounting_approve_label = $rs->getString($startcol + 4);

            $this->accounting_note = $rs->getString($startcol + 5);

            $this->accounting_note_label = $rs->getString($startcol + 6);

            $this->budget_cost_item = $rs->getFloat($startcol + 7);

            $this->budget_department = $rs->getFloat($startcol + 8);

            $this->contract_file = $rs->getString($startcol + 9);

            $this->contract_name = $rs->getString($startcol + 10);

            $this->contract_no = $rs->getString($startcol + 11);

            $this->contract_type = $rs->getString($startcol + 12);

            $this->cost_item_lv2 = $rs->getString($startcol + 13);

            $this->cost_item_lv3 = $rs->getString($startcol + 14);

            $this->createuser = $rs->getString($startcol + 15);

            $this->currentdepartment = $rs->getString($startcol + 16);

            $this->date_close = $rs->getString($startcol + 17);

            $this->date_open = $rs->getString($startcol + 18);

            $this->department = $rs->getString($startcol + 19);

            $this->description = $rs->getString($startcol + 20);

            $this->erp_id = $rs->getFloat($startcol + 21);

            $this->erp_reason = $rs->getString($startcol + 22);

            $this->flow_id = $rs->getString($startcol + 23);

            $this->fnauser = $rs->getString($startcol + 24);

            $this->fna_approve = $rs->getInt($startcol + 25);

            $this->fna_note = $rs->getString($startcol + 26);

            $this->head_approve = $rs->getInt($startcol + 27);

            $this->head_approve_label = $rs->getString($startcol + 28);

            $this->head_note = $rs->getString($startcol + 29);

            $this->head_note_label = $rs->getString($startcol + 30);

            $this->legaluser = $rs->getString($startcol + 31);

            $this->line_manager = $rs->getString($startcol + 32);

            $this->line_manager_1 = $rs->getString($startcol + 33);

            $this->line_manager_approve = $rs->getString($startcol + 34);

            $this->line_manager_approve_label = $rs->getString($startcol + 35);

            $this->line_manager_note = $rs->getString($startcol + 36);

            $this->line_manager_note_label = $rs->getString($startcol + 37);

            $this->payment_amount = $rs->getString($startcol + 38);

            $this->payment_date = $rs->getString($startcol + 39);

            $this->payment_summary = $rs->getString($startcol + 40);

            $this->payment_supplier = $rs->getString($startcol + 41);

            $this->request_amount = $rs->getString($startcol + 42);

            $this->request_amount_total = $rs->getString($startcol + 43);

            $this->request_approved = $rs->getInt($startcol + 44);

            $this->request_contract = $rs->getString($startcol + 45);

            $this->request_id = $rs->getString($startcol + 46);

            $this->request_type = $rs->getString($startcol + 47);

            $this->saleuser = $rs->getString($startcol + 48);

            $this->search_flow_id_by_name = $rs->getString($startcol + 49);

            $this->summary = $rs->getString($startcol + 50);

            $this->supplier_code = $rs->getString($startcol + 51);

            $this->supplier_name = $rs->getString($startcol + 52);

            $this->user_confirm = $rs->getInt($startcol + 53);

            $this->supplier_payment_info = $rs->getString($startcol + 54);

            $this->user_confirm_note = $rs->getString($startcol + 55);

            $this->user_note = $rs->getString($startcol + 56);

            $this->resetModified();

            $this->setNew(false);

            // FIXME - using NUM_COLUMNS may be clearer.
            return $startcol + 57; // 57 = PmtThanhtoanPeer::NUM_COLUMNS - PmtThanhtoanPeer::NUM_LAZY_LOAD_COLUMNS).

        } catch (Exception $e) {
            throw new PropelException("Error populating PmtThanhtoan object", $e);
        }
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      Connection $con
     * @return     void
     * @throws     PropelException
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PmtThanhtoanPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            PmtThanhtoanPeer::doDelete($this, $con);
            $this->setDeleted(true);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.  If the object is new,
     * it inserts it; otherwise an update is performed.  This method
     * wraps the doSave() worker method in a transaction.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update
     * @throws     PropelException
     * @see        doSave()
     */
    public function save($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PmtThanhtoanPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            $affectedRows = $this->doSave($con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update and any referring
     * @throws     PropelException
     * @see        save()
     */
    protected function doSave($con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;


            // If this object has been modified, then save it to the database.
            if ($this->isModified()) {
                if ($this->isNew()) {
                    $pk = PmtThanhtoanPeer::doInsert($this, $con);
                    $affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
                                         // should always be true here (even though technically
                                         // BasePeer::doInsert() can insert multiple rows).

                    $this->setNew(false);
                } else {
                    $affectedRows += PmtThanhtoanPeer::doUpdate($this, $con);
                }
                $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
            }

            $this->alreadyInSave = false;
        }
        return $affectedRows;
    } // doSave()

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return     array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param      mixed $columns Column name or an array of column names.
     * @return     boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();
            return true;
        } else {
            $this->validationFailures = $res;
            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return     mixed <code>true</code> if all validations pass; 
                   array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = PmtThanhtoanPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PmtThanhtoanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->getByPosition($pos);
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return     mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch($pos) {
            case 0:
                return $this->getAppUid();
                break;
            case 1:
                return $this->getAppNumber();
                break;
            case 2:
                return $this->getAppStatus();
                break;
            case 3:
                return $this->getAccountingApprove();
                break;
            case 4:
                return $this->getAccountingApproveLabel();
                break;
            case 5:
                return $this->getAccountingNote();
                break;
            case 6:
                return $this->getAccountingNoteLabel();
                break;
            case 7:
                return $this->getBudgetCostItem();
                break;
            case 8:
                return $this->getBudgetDepartment();
                break;
            case 9:
                return $this->getContractFile();
                break;
            case 10:
                return $this->getContractName();
                break;
            case 11:
                return $this->getContractNo();
                break;
            case 12:
                return $this->getContractType();
                break;
            case 13:
                return $this->getCostItemLv2();
                break;
            case 14:
                return $this->getCostItemLv3();
                break;
            case 15:
                return $this->getCreateuser();
                break;
            case 16:
                return $this->getCurrentdepartment();
                break;
            case 17:
                return $this->getDateClose();
                break;
            case 18:
                return $this->getDateOpen();
                break;
            case 19:
                return $this->getDepartment();
                break;
            case 20:
                return $this->getDescription();
                break;
            case 21:
                return $this->getErpId();
                break;
            case 22:
                return $this->getErpReason();
                break;
            case 23:
                return $this->getFlowId();
                break;
            case 24:
                return $this->getFnauser();
                break;
            case 25:
                return $this->getFnaApprove();
                break;
            case 26:
                return $this->getFnaNote();
                break;
            case 27:
                return $this->getHeadApprove();
                break;
            case 28:
                return $this->getHeadApproveLabel();
                break;
            case 29:
                return $this->getHeadNote();
                break;
            case 30:
                return $this->getHeadNoteLabel();
                break;
            case 31:
                return $this->getLegaluser();
                break;
            case 32:
                return $this->getLineManager();
                break;
            case 33:
                return $this->getLineManager1();
                break;
            case 34:
                return $this->getLineManagerApprove();
                break;
            case 35:
                return $this->getLineManagerApproveLabel();
                break;
            case 36:
                return $this->getLineManagerNote();
                break;
            case 37:
                return $this->getLineManagerNoteLabel();
                break;
            case 38:
                return $this->getPaymentAmount();
                break;
            case 39:
                return $this->getPaymentDate();
                break;
            case 40:
                return $this->getPaymentSummary();
                break;
            case 41:
                return $this->getPaymentSupplier();
                break;
            case 42:
                return $this->getRequestAmount();
                break;
            case 43:
                return $this->getRequestAmountTotal();
                break;
            case 44:
                return $this->getRequestApproved();
                break;
            case 45:
                return $this->getRequestContract();
                break;
            case 46:
                return $this->getRequestId();
                break;
            case 47:
                return $this->getRequestType();
                break;
            case 48:
                return $this->getSaleuser();
                break;
            case 49:
                return $this->getSearchFlowIdByName();
                break;
            case 50:
                return $this->getSummary();
                break;
            case 51:
                return $this->getSupplierCode();
                break;
            case 52:
                return $this->getSupplierName();
                break;
            case 53:
                return $this->getUserConfirm();
                break;
            case 54:
                return $this->getSupplierPaymentInfo();
                break;
            case 55:
                return $this->getUserConfirmNote();
                break;
            case 56:
                return $this->getUserNote();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param      string $keyType One of the class type constants TYPE_PHPNAME,
     *                        TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PmtThanhtoanPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAppUid(),
            $keys[1] => $this->getAppNumber(),
            $keys[2] => $this->getAppStatus(),
            $keys[3] => $this->getAccountingApprove(),
            $keys[4] => $this->getAccountingApproveLabel(),
            $keys[5] => $this->getAccountingNote(),
            $keys[6] => $this->getAccountingNoteLabel(),
            $keys[7] => $this->getBudgetCostItem(),
            $keys[8] => $this->getBudgetDepartment(),
            $keys[9] => $this->getContractFile(),
            $keys[10] => $this->getContractName(),
            $keys[11] => $this->getContractNo(),
            $keys[12] => $this->getContractType(),
            $keys[13] => $this->getCostItemLv2(),
            $keys[14] => $this->getCostItemLv3(),
            $keys[15] => $this->getCreateuser(),
            $keys[16] => $this->getCurrentdepartment(),
            $keys[17] => $this->getDateClose(),
            $keys[18] => $this->getDateOpen(),
            $keys[19] => $this->getDepartment(),
            $keys[20] => $this->getDescription(),
            $keys[21] => $this->getErpId(),
            $keys[22] => $this->getErpReason(),
            $keys[23] => $this->getFlowId(),
            $keys[24] => $this->getFnauser(),
            $keys[25] => $this->getFnaApprove(),
            $keys[26] => $this->getFnaNote(),
            $keys[27] => $this->getHeadApprove(),
            $keys[28] => $this->getHeadApproveLabel(),
            $keys[29] => $this->getHeadNote(),
            $keys[30] => $this->getHeadNoteLabel(),
            $keys[31] => $this->getLegaluser(),
            $keys[32] => $this->getLineManager(),
            $keys[33] => $this->getLineManager1(),
            $keys[34] => $this->getLineManagerApprove(),
            $keys[35] => $this->getLineManagerApproveLabel(),
            $keys[36] => $this->getLineManagerNote(),
            $keys[37] => $this->getLineManagerNoteLabel(),
            $keys[38] => $this->getPaymentAmount(),
            $keys[39] => $this->getPaymentDate(),
            $keys[40] => $this->getPaymentSummary(),
            $keys[41] => $this->getPaymentSupplier(),
            $keys[42] => $this->getRequestAmount(),
            $keys[43] => $this->getRequestAmountTotal(),
            $keys[44] => $this->getRequestApproved(),
            $keys[45] => $this->getRequestContract(),
            $keys[46] => $this->getRequestId(),
            $keys[47] => $this->getRequestType(),
            $keys[48] => $this->getSaleuser(),
            $keys[49] => $this->getSearchFlowIdByName(),
            $keys[50] => $this->getSummary(),
            $keys[51] => $this->getSupplierCode(),
            $keys[52] => $this->getSupplierName(),
            $keys[53] => $this->getUserConfirm(),
            $keys[54] => $this->getSupplierPaymentInfo(),
            $keys[55] => $this->getUserConfirmNote(),
            $keys[56] => $this->getUserNote(),
        );
        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PmtThanhtoanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return     void
     */
    public function setByPosition($pos, $value)
    {
        switch($pos) {
            case 0:
                $this->setAppUid($value);
                break;
            case 1:
                $this->setAppNumber($value);
                break;
            case 2:
                $this->setAppStatus($value);
                break;
            case 3:
                $this->setAccountingApprove($value);
                break;
            case 4:
                $this->setAccountingApproveLabel($value);
                break;
            case 5:
                $this->setAccountingNote($value);
                break;
            case 6:
                $this->setAccountingNoteLabel($value);
                break;
            case 7:
                $this->setBudgetCostItem($value);
                break;
            case 8:
                $this->setBudgetDepartment($value);
                break;
            case 9:
                $this->setContractFile($value);
                break;
            case 10:
                $this->setContractName($value);
                break;
            case 11:
                $this->setContractNo($value);
                break;
            case 12:
                $this->setContractType($value);
                break;
            case 13:
                $this->setCostItemLv2($value);
                break;
            case 14:
                $this->setCostItemLv3($value);
                break;
            case 15:
                $this->setCreateuser($value);
                break;
            case 16:
                $this->setCurrentdepartment($value);
                break;
            case 17:
                $this->setDateClose($value);
                break;
            case 18:
                $this->setDateOpen($value);
                break;
            case 19:
                $this->setDepartment($value);
                break;
            case 20:
                $this->setDescription($value);
                break;
            case 21:
                $this->setErpId($value);
                break;
            case 22:
                $this->setErpReason($value);
                break;
            case 23:
                $this->setFlowId($value);
                break;
            case 24:
                $this->setFnauser($value);
                break;
            case 25:
                $this->setFnaApprove($value);
                break;
            case 26:
                $this->setFnaNote($value);
                break;
            case 27:
                $this->setHeadApprove($value);
                break;
            case 28:
                $this->setHeadApproveLabel($value);
                break;
            case 29:
                $this->setHeadNote($value);
                break;
            case 30:
                $this->setHeadNoteLabel($value);
                break;
            case 31:
                $this->setLegaluser($value);
                break;
            case 32:
                $this->setLineManager($value);
                break;
            case 33:
                $this->setLineManager1($value);
                break;
            case 34:
                $this->setLineManagerApprove($value);
                break;
            case 35:
                $this->setLineManagerApproveLabel($value);
                break;
            case 36:
                $this->setLineManagerNote($value);
                break;
            case 37:
                $this->setLineManagerNoteLabel($value);
                break;
            case 38:
                $this->setPaymentAmount($value);
                break;
            case 39:
                $this->setPaymentDate($value);
                break;
            case 40:
                $this->setPaymentSummary($value);
                break;
            case 41:
                $this->setPaymentSupplier($value);
                break;
            case 42:
                $this->setRequestAmount($value);
                break;
            case 43:
                $this->setRequestAmountTotal($value);
                break;
            case 44:
                $this->setRequestApproved($value);
                break;
            case 45:
                $this->setRequestContract($value);
                break;
            case 46:
                $this->setRequestId($value);
                break;
            case 47:
                $this->setRequestType($value);
                break;
            case 48:
                $this->setSaleuser($value);
                break;
            case 49:
                $this->setSearchFlowIdByName($value);
                break;
            case 50:
                $this->setSummary($value);
                break;
            case 51:
                $this->setSupplierCode($value);
                break;
            case 52:
                $this->setSupplierName($value);
                break;
            case 53:
                $this->setUserConfirm($value);
                break;
            case 54:
                $this->setSupplierPaymentInfo($value);
                break;
            case 55:
                $this->setUserConfirmNote($value);
                break;
            case 56:
                $this->setUserNote($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME,
     * TYPE_NUM. The default key type is the column's phpname (e.g. 'authorId')
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PmtThanhtoanPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setAppUid($arr[$keys[0]]);
        }

        if (array_key_exists($keys[1], $arr)) {
            $this->setAppNumber($arr[$keys[1]]);
        }

        if (array_key_exists($keys[2], $arr)) {
            $this->setAppStatus($arr[$keys[2]]);
        }

        if (array_key_exists($keys[3], $arr)) {
            $this->setAccountingApprove($arr[$keys[3]]);
        }

        if (array_key_exists($keys[4], $arr)) {
            $this->setAccountingApproveLabel($arr[$keys[4]]);
        }

        if (array_key_exists($keys[5], $arr)) {
            $this->setAccountingNote($arr[$keys[5]]);
        }

        if (array_key_exists($keys[6], $arr)) {
            $this->setAccountingNoteLabel($arr[$keys[6]]);
        }

        if (array_key_exists($keys[7], $arr)) {
            $this->setBudgetCostItem($arr[$keys[7]]);
        }

        if (array_key_exists($keys[8], $arr)) {
            $this->setBudgetDepartment($arr[$keys[8]]);
        }

        if (array_key_exists($keys[9], $arr)) {
            $this->setContractFile($arr[$keys[9]]);
        }

        if (array_key_exists($keys[10], $arr)) {
            $this->setContractName($arr[$keys[10]]);
        }

        if (array_key_exists($keys[11], $arr)) {
            $this->setContractNo($arr[$keys[11]]);
        }

        if (array_key_exists($keys[12], $arr)) {
            $this->setContractType($arr[$keys[12]]);
        }

        if (array_key_exists($keys[13], $arr)) {
            $this->setCostItemLv2($arr[$keys[13]]);
        }

        if (array_key_exists($keys[14], $arr)) {
            $this->setCostItemLv3($arr[$keys[14]]);
        }

        if (array_key_exists($keys[15], $arr)) {
            $this->setCreateuser($arr[$keys[15]]);
        }

        if (array_key_exists($keys[16], $arr)) {
            $this->setCurrentdepartment($arr[$keys[16]]);
        }

        if (array_key_exists($keys[17], $arr)) {
            $this->setDateClose($arr[$keys[17]]);
        }

        if (array_key_exists($keys[18], $arr)) {
            $this->setDateOpen($arr[$keys[18]]);
        }

        if (array_key_exists($keys[19], $arr)) {
            $this->setDepartment($arr[$keys[19]]);
        }

        if (array_key_exists($keys[20], $arr)) {
            $this->setDescription($arr[$keys[20]]);
        }

        if (array_key_exists($keys[21], $arr)) {
            $this->setErpId($arr[$keys[21]]);
        }

        if (array_key_exists($keys[22], $arr)) {
            $this->setErpReason($arr[$keys[22]]);
        }

        if (array_key_exists($keys[23], $arr)) {
            $this->setFlowId($arr[$keys[23]]);
        }

        if (array_key_exists($keys[24], $arr)) {
            $this->setFnauser($arr[$keys[24]]);
        }

        if (array_key_exists($keys[25], $arr)) {
            $this->setFnaApprove($arr[$keys[25]]);
        }

        if (array_key_exists($keys[26], $arr)) {
            $this->setFnaNote($arr[$keys[26]]);
        }

        if (array_key_exists($keys[27], $arr)) {
            $this->setHeadApprove($arr[$keys[27]]);
        }

        if (array_key_exists($keys[28], $arr)) {
            $this->setHeadApproveLabel($arr[$keys[28]]);
        }

        if (array_key_exists($keys[29], $arr)) {
            $this->setHeadNote($arr[$keys[29]]);
        }

        if (array_key_exists($keys[30], $arr)) {
            $this->setHeadNoteLabel($arr[$keys[30]]);
        }

        if (array_key_exists($keys[31], $arr)) {
            $this->setLegaluser($arr[$keys[31]]);
        }

        if (array_key_exists($keys[32], $arr)) {
            $this->setLineManager($arr[$keys[32]]);
        }

        if (array_key_exists($keys[33], $arr)) {
            $this->setLineManager1($arr[$keys[33]]);
        }

        if (array_key_exists($keys[34], $arr)) {
            $this->setLineManagerApprove($arr[$keys[34]]);
        }

        if (array_key_exists($keys[35], $arr)) {
            $this->setLineManagerApproveLabel($arr[$keys[35]]);
        }

        if (array_key_exists($keys[36], $arr)) {
            $this->setLineManagerNote($arr[$keys[36]]);
        }

        if (array_key_exists($keys[37], $arr)) {
            $this->setLineManagerNoteLabel($arr[$keys[37]]);
        }

        if (array_key_exists($keys[38], $arr)) {
            $this->setPaymentAmount($arr[$keys[38]]);
        }

        if (array_key_exists($keys[39], $arr)) {
            $this->setPaymentDate($arr[$keys[39]]);
        }

        if (array_key_exists($keys[40], $arr)) {
            $this->setPaymentSummary($arr[$keys[40]]);
        }

        if (array_key_exists($keys[41], $arr)) {
            $this->setPaymentSupplier($arr[$keys[41]]);
        }

        if (array_key_exists($keys[42], $arr)) {
            $this->setRequestAmount($arr[$keys[42]]);
        }

        if (array_key_exists($keys[43], $arr)) {
            $this->setRequestAmountTotal($arr[$keys[43]]);
        }

        if (array_key_exists($keys[44], $arr)) {
            $this->setRequestApproved($arr[$keys[44]]);
        }

        if (array_key_exists($keys[45], $arr)) {
            $this->setRequestContract($arr[$keys[45]]);
        }

        if (array_key_exists($keys[46], $arr)) {
            $this->setRequestId($arr[$keys[46]]);
        }

        if (array_key_exists($keys[47], $arr)) {
            $this->setRequestType($arr[$keys[47]]);
        }

        if (array_key_exists($keys[48], $arr)) {
            $this->setSaleuser($arr[$keys[48]]);
        }

        if (array_key_exists($keys[49], $arr)) {
            $this->setSearchFlowIdByName($arr[$keys[49]]);
        }

        if (array_key_exists($keys[50], $arr)) {
            $this->setSummary($arr[$keys[50]]);
        }

        if (array_key_exists($keys[51], $arr)) {
            $this->setSupplierCode($arr[$keys[51]]);
        }

        if (array_key_exists($keys[52], $arr)) {
            $this->setSupplierName($arr[$keys[52]]);
        }

        if (array_key_exists($keys[53], $arr)) {
            $this->setUserConfirm($arr[$keys[53]]);
        }

        if (array_key_exists($keys[54], $arr)) {
            $this->setSupplierPaymentInfo($arr[$keys[54]]);
        }

        if (array_key_exists($keys[55], $arr)) {
            $this->setUserConfirmNote($arr[$keys[55]]);
        }

        if (array_key_exists($keys[56], $arr)) {
            $this->setUserNote($arr[$keys[56]]);
        }

    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return     Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PmtThanhtoanPeer::DATABASE_NAME);

        if ($this->isColumnModified(PmtThanhtoanPeer::APP_UID)) {
            $criteria->add(PmtThanhtoanPeer::APP_UID, $this->app_uid);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::APP_NUMBER)) {
            $criteria->add(PmtThanhtoanPeer::APP_NUMBER, $this->app_number);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::APP_STATUS)) {
            $criteria->add(PmtThanhtoanPeer::APP_STATUS, $this->app_status);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::ACCOUNTING_APPROVE)) {
            $criteria->add(PmtThanhtoanPeer::ACCOUNTING_APPROVE, $this->accounting_approve);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::ACCOUNTING_APPROVE_LABEL)) {
            $criteria->add(PmtThanhtoanPeer::ACCOUNTING_APPROVE_LABEL, $this->accounting_approve_label);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::ACCOUNTING_NOTE)) {
            $criteria->add(PmtThanhtoanPeer::ACCOUNTING_NOTE, $this->accounting_note);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::ACCOUNTING_NOTE_LABEL)) {
            $criteria->add(PmtThanhtoanPeer::ACCOUNTING_NOTE_LABEL, $this->accounting_note_label);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::BUDGET_COST_ITEM)) {
            $criteria->add(PmtThanhtoanPeer::BUDGET_COST_ITEM, $this->budget_cost_item);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::BUDGET_DEPARTMENT)) {
            $criteria->add(PmtThanhtoanPeer::BUDGET_DEPARTMENT, $this->budget_department);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::CONTRACT_FILE)) {
            $criteria->add(PmtThanhtoanPeer::CONTRACT_FILE, $this->contract_file);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::CONTRACT_NAME)) {
            $criteria->add(PmtThanhtoanPeer::CONTRACT_NAME, $this->contract_name);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::CONTRACT_NO)) {
            $criteria->add(PmtThanhtoanPeer::CONTRACT_NO, $this->contract_no);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::CONTRACT_TYPE)) {
            $criteria->add(PmtThanhtoanPeer::CONTRACT_TYPE, $this->contract_type);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::COST_ITEM_LV2)) {
            $criteria->add(PmtThanhtoanPeer::COST_ITEM_LV2, $this->cost_item_lv2);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::COST_ITEM_LV3)) {
            $criteria->add(PmtThanhtoanPeer::COST_ITEM_LV3, $this->cost_item_lv3);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::CREATEUSER)) {
            $criteria->add(PmtThanhtoanPeer::CREATEUSER, $this->createuser);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::CURRENTDEPARTMENT)) {
            $criteria->add(PmtThanhtoanPeer::CURRENTDEPARTMENT, $this->currentdepartment);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::DATE_CLOSE)) {
            $criteria->add(PmtThanhtoanPeer::DATE_CLOSE, $this->date_close);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::DATE_OPEN)) {
            $criteria->add(PmtThanhtoanPeer::DATE_OPEN, $this->date_open);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::DEPARTMENT)) {
            $criteria->add(PmtThanhtoanPeer::DEPARTMENT, $this->department);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::DESCRIPTION)) {
            $criteria->add(PmtThanhtoanPeer::DESCRIPTION, $this->description);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::ERP_ID)) {
            $criteria->add(PmtThanhtoanPeer::ERP_ID, $this->erp_id);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::ERP_REASON)) {
            $criteria->add(PmtThanhtoanPeer::ERP_REASON, $this->erp_reason);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::FLOW_ID)) {
            $criteria->add(PmtThanhtoanPeer::FLOW_ID, $this->flow_id);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::FNAUSER)) {
            $criteria->add(PmtThanhtoanPeer::FNAUSER, $this->fnauser);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::FNA_APPROVE)) {
            $criteria->add(PmtThanhtoanPeer::FNA_APPROVE, $this->fna_approve);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::FNA_NOTE)) {
            $criteria->add(PmtThanhtoanPeer::FNA_NOTE, $this->fna_note);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::HEAD_APPROVE)) {
            $criteria->add(PmtThanhtoanPeer::HEAD_APPROVE, $this->head_approve);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::HEAD_APPROVE_LABEL)) {
            $criteria->add(PmtThanhtoanPeer::HEAD_APPROVE_LABEL, $this->head_approve_label);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::HEAD_NOTE)) {
            $criteria->add(PmtThanhtoanPeer::HEAD_NOTE, $this->head_note);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::HEAD_NOTE_LABEL)) {
            $criteria->add(PmtThanhtoanPeer::HEAD_NOTE_LABEL, $this->head_note_label);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::LEGALUSER)) {
            $criteria->add(PmtThanhtoanPeer::LEGALUSER, $this->legaluser);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::LINE_MANAGER)) {
            $criteria->add(PmtThanhtoanPeer::LINE_MANAGER, $this->line_manager);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::LINE_MANAGER_1)) {
            $criteria->add(PmtThanhtoanPeer::LINE_MANAGER_1, $this->line_manager_1);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::LINE_MANAGER_APPROVE)) {
            $criteria->add(PmtThanhtoanPeer::LINE_MANAGER_APPROVE, $this->line_manager_approve);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::LINE_MANAGER_APPROVE_LABEL)) {
            $criteria->add(PmtThanhtoanPeer::LINE_MANAGER_APPROVE_LABEL, $this->line_manager_approve_label);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::LINE_MANAGER_NOTE)) {
            $criteria->add(PmtThanhtoanPeer::LINE_MANAGER_NOTE, $this->line_manager_note);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::LINE_MANAGER_NOTE_LABEL)) {
            $criteria->add(PmtThanhtoanPeer::LINE_MANAGER_NOTE_LABEL, $this->line_manager_note_label);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::PAYMENT_AMOUNT)) {
            $criteria->add(PmtThanhtoanPeer::PAYMENT_AMOUNT, $this->payment_amount);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::PAYMENT_DATE)) {
            $criteria->add(PmtThanhtoanPeer::PAYMENT_DATE, $this->payment_date);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::PAYMENT_SUMMARY)) {
            $criteria->add(PmtThanhtoanPeer::PAYMENT_SUMMARY, $this->payment_summary);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::PAYMENT_SUPPLIER)) {
            $criteria->add(PmtThanhtoanPeer::PAYMENT_SUPPLIER, $this->payment_supplier);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::REQUEST_AMOUNT)) {
            $criteria->add(PmtThanhtoanPeer::REQUEST_AMOUNT, $this->request_amount);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::REQUEST_AMOUNT_TOTAL)) {
            $criteria->add(PmtThanhtoanPeer::REQUEST_AMOUNT_TOTAL, $this->request_amount_total);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::REQUEST_APPROVED)) {
            $criteria->add(PmtThanhtoanPeer::REQUEST_APPROVED, $this->request_approved);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::REQUEST_CONTRACT)) {
            $criteria->add(PmtThanhtoanPeer::REQUEST_CONTRACT, $this->request_contract);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::REQUEST_ID)) {
            $criteria->add(PmtThanhtoanPeer::REQUEST_ID, $this->request_id);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::REQUEST_TYPE)) {
            $criteria->add(PmtThanhtoanPeer::REQUEST_TYPE, $this->request_type);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::SALEUSER)) {
            $criteria->add(PmtThanhtoanPeer::SALEUSER, $this->saleuser);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::SEARCH_FLOW_ID_BY_NAME)) {
            $criteria->add(PmtThanhtoanPeer::SEARCH_FLOW_ID_BY_NAME, $this->search_flow_id_by_name);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::SUMMARY)) {
            $criteria->add(PmtThanhtoanPeer::SUMMARY, $this->summary);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::SUPPLIER_CODE)) {
            $criteria->add(PmtThanhtoanPeer::SUPPLIER_CODE, $this->supplier_code);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::SUPPLIER_NAME)) {
            $criteria->add(PmtThanhtoanPeer::SUPPLIER_NAME, $this->supplier_name);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::USER_CONFIRM)) {
            $criteria->add(PmtThanhtoanPeer::USER_CONFIRM, $this->user_confirm);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::SUPPLIER_PAYMENT_INFO)) {
            $criteria->add(PmtThanhtoanPeer::SUPPLIER_PAYMENT_INFO, $this->supplier_payment_info);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::USER_CONFIRM_NOTE)) {
            $criteria->add(PmtThanhtoanPeer::USER_CONFIRM_NOTE, $this->user_confirm_note);
        }

        if ($this->isColumnModified(PmtThanhtoanPeer::USER_NOTE)) {
            $criteria->add(PmtThanhtoanPeer::USER_NOTE, $this->user_note);
        }


        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return     Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(PmtThanhtoanPeer::DATABASE_NAME);

        $criteria->add(PmtThanhtoanPeer::APP_UID, $this->app_uid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return     string
     */
    public function getPrimaryKey()
    {
        return $this->getAppUid();
    }

    /**
     * Generic method to set the primary key (app_uid column).
     *
     * @param      string $key Primary key.
     * @return     void
     */
    public function setPrimaryKey($key)
    {
        $this->setAppUid($key);
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of PmtThanhtoan (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @throws     PropelException
     */
    public function copyInto($copyObj, $deepCopy = false)
    {

        $copyObj->setAppNumber($this->app_number);

        $copyObj->setAppStatus($this->app_status);

        $copyObj->setAccountingApprove($this->accounting_approve);

        $copyObj->setAccountingApproveLabel($this->accounting_approve_label);

        $copyObj->setAccountingNote($this->accounting_note);

        $copyObj->setAccountingNoteLabel($this->accounting_note_label);

        $copyObj->setBudgetCostItem($this->budget_cost_item);

        $copyObj->setBudgetDepartment($this->budget_department);

        $copyObj->setContractFile($this->contract_file);

        $copyObj->setContractName($this->contract_name);

        $copyObj->setContractNo($this->contract_no);

        $copyObj->setContractType($this->contract_type);

        $copyObj->setCostItemLv2($this->cost_item_lv2);

        $copyObj->setCostItemLv3($this->cost_item_lv3);

        $copyObj->setCreateuser($this->createuser);

        $copyObj->setCurrentdepartment($this->currentdepartment);

        $copyObj->setDateClose($this->date_close);

        $copyObj->setDateOpen($this->date_open);

        $copyObj->setDepartment($this->department);

        $copyObj->setDescription($this->description);

        $copyObj->setErpId($this->erp_id);

        $copyObj->setErpReason($this->erp_reason);

        $copyObj->setFlowId($this->flow_id);

        $copyObj->setFnauser($this->fnauser);

        $copyObj->setFnaApprove($this->fna_approve);

        $copyObj->setFnaNote($this->fna_note);

        $copyObj->setHeadApprove($this->head_approve);

        $copyObj->setHeadApproveLabel($this->head_approve_label);

        $copyObj->setHeadNote($this->head_note);

        $copyObj->setHeadNoteLabel($this->head_note_label);

        $copyObj->setLegaluser($this->legaluser);

        $copyObj->setLineManager($this->line_manager);

        $copyObj->setLineManager1($this->line_manager_1);

        $copyObj->setLineManagerApprove($this->line_manager_approve);

        $copyObj->setLineManagerApproveLabel($this->line_manager_approve_label);

        $copyObj->setLineManagerNote($this->line_manager_note);

        $copyObj->setLineManagerNoteLabel($this->line_manager_note_label);

        $copyObj->setPaymentAmount($this->payment_amount);

        $copyObj->setPaymentDate($this->payment_date);

        $copyObj->setPaymentSummary($this->payment_summary);

        $copyObj->setPaymentSupplier($this->payment_supplier);

        $copyObj->setRequestAmount($this->request_amount);

        $copyObj->setRequestAmountTotal($this->request_amount_total);

        $copyObj->setRequestApproved($this->request_approved);

        $copyObj->setRequestContract($this->request_contract);

        $copyObj->setRequestId($this->request_id);

        $copyObj->setRequestType($this->request_type);

        $copyObj->setSaleuser($this->saleuser);

        $copyObj->setSearchFlowIdByName($this->search_flow_id_by_name);

        $copyObj->setSummary($this->summary);

        $copyObj->setSupplierCode($this->supplier_code);

        $copyObj->setSupplierName($this->supplier_name);

        $copyObj->setUserConfirm($this->user_confirm);

        $copyObj->setSupplierPaymentInfo($this->supplier_payment_info);

        $copyObj->setUserConfirmNote($this->user_confirm_note);

        $copyObj->setUserNote($this->user_note);


        $copyObj->setNew(true);

        $copyObj->setAppUid(NULL); // this is a pkey column, so set to default value

    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return     PmtThanhtoan Clone of current object.
     * @throws     PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);
        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return     PmtThanhtoanPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PmtThanhtoanPeer();
        }
        return self::$peer;
    }
}

