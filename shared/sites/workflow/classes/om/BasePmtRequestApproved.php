<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'classes/PmtRequestApprovedPeer.php';

/**
 * Base class that represents a row from the 'PMT_REQUEST_APPROVED' table.
 *
 * 
 *
 * @package    workflow.classes.om
 */
abstract class BasePmtRequestApproved extends BaseObject implements Persistent
{

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PmtRequestApprovedPeer
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
     * The value for the user_confirm field.
     * @var        int
     */
    protected $user_confirm;

    /**
     * The value for the fna_approve field.
     * @var        int
     */
    protected $fna_approve;

    /**
     * The value for the head_approve field.
     * @var        int
     */
    protected $head_approve;

    /**
     * The value for the legal_approve field.
     * @var        int
     */
    protected $legal_approve;

    /**
     * The value for the line_manager_approve field.
     * @var        string
     */
    protected $line_manager_approve;

    /**
     * The value for the procurement_approve field.
     * @var        int
     */
    protected $procurement_approve;

    /**
     * The value for the request_approved field.
     * @var        int
     */
    protected $request_approved;

    /**
     * The value for the createuser field.
     * @var        string
     */
    protected $createuser;

    /**
     * The value for the createusername field.
     * @var        string
     */
    protected $createusername;

    /**
     * The value for the currentdepartment_label field.
     * @var        string
     */
    protected $currentdepartment_label;

    /**
     * The value for the department_label field.
     * @var        string
     */
    protected $department_label;

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
     * The value for the request_amount_total_label field.
     * @var        string
     */
    protected $request_amount_total_label;

    /**
     * The value for the summary field.
     * @var        string
     */
    protected $summary;

    /**
     * The value for the summary_label field.
     * @var        string
     */
    protected $summary_label;

    /**
     * The value for the user_confirm_note field.
     * @var        string
     */
    protected $user_confirm_note;

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
     * Get the [user_confirm] column value.
     * 
     * @return     int
     */
    public function getUserConfirm()
    {

        return $this->user_confirm;
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
     * Get the [head_approve] column value.
     * 
     * @return     int
     */
    public function getHeadApprove()
    {

        return $this->head_approve;
    }

    /**
     * Get the [legal_approve] column value.
     * 
     * @return     int
     */
    public function getLegalApprove()
    {

        return $this->legal_approve;
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
     * Get the [procurement_approve] column value.
     * 
     * @return     int
     */
    public function getProcurementApprove()
    {

        return $this->procurement_approve;
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
     * Get the [createuser] column value.
     * 
     * @return     string
     */
    public function getCreateuser()
    {

        return $this->createuser;
    }

    /**
     * Get the [createusername] column value.
     * 
     * @return     string
     */
    public function getCreateusername()
    {

        return $this->createusername;
    }

    /**
     * Get the [currentdepartment_label] column value.
     * 
     * @return     string
     */
    public function getCurrentdepartmentLabel()
    {

        return $this->currentdepartment_label;
    }

    /**
     * Get the [department_label] column value.
     * 
     * @return     string
     */
    public function getDepartmentLabel()
    {

        return $this->department_label;
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
     * Get the [request_amount_total_label] column value.
     * 
     * @return     string
     */
    public function getRequestAmountTotalLabel()
    {

        return $this->request_amount_total_label;
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
     * Get the [summary_label] column value.
     * 
     * @return     string
     */
    public function getSummaryLabel()
    {

        return $this->summary_label;
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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::APP_UID;
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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::APP_NUMBER;
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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::APP_STATUS;
        }

    } // setAppStatus()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::USER_CONFIRM;
        }

    } // setUserConfirm()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::FNA_APPROVE;
        }

    } // setFnaApprove()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::HEAD_APPROVE;
        }

    } // setHeadApprove()

    /**
     * Set the value of [legal_approve] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setLegalApprove($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->legal_approve !== $v) {
            $this->legal_approve = $v;
            $this->modifiedColumns[] = PmtRequestApprovedPeer::LEGAL_APPROVE;
        }

    } // setLegalApprove()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::LINE_MANAGER_APPROVE;
        }

    } // setLineManagerApprove()

    /**
     * Set the value of [procurement_approve] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setProcurementApprove($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->procurement_approve !== $v) {
            $this->procurement_approve = $v;
            $this->modifiedColumns[] = PmtRequestApprovedPeer::PROCUREMENT_APPROVE;
        }

    } // setProcurementApprove()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::REQUEST_APPROVED;
        }

    } // setRequestApproved()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::CREATEUSER;
        }

    } // setCreateuser()

    /**
     * Set the value of [createusername] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setCreateusername($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->createusername !== $v) {
            $this->createusername = $v;
            $this->modifiedColumns[] = PmtRequestApprovedPeer::CREATEUSERNAME;
        }

    } // setCreateusername()

    /**
     * Set the value of [currentdepartment_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setCurrentdepartmentLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->currentdepartment_label !== $v) {
            $this->currentdepartment_label = $v;
            $this->modifiedColumns[] = PmtRequestApprovedPeer::CURRENTDEPARTMENT_LABEL;
        }

    } // setCurrentdepartmentLabel()

    /**
     * Set the value of [department_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setDepartmentLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->department_label !== $v) {
            $this->department_label = $v;
            $this->modifiedColumns[] = PmtRequestApprovedPeer::DEPARTMENT_LABEL;
        }

    } // setDepartmentLabel()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::ERP_ID;
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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::ERP_REASON;
        }

    } // setErpReason()

    /**
     * Set the value of [request_amount_total_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setRequestAmountTotalLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->request_amount_total_label !== $v) {
            $this->request_amount_total_label = $v;
            $this->modifiedColumns[] = PmtRequestApprovedPeer::REQUEST_AMOUNT_TOTAL_LABEL;
        }

    } // setRequestAmountTotalLabel()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::SUMMARY;
        }

    } // setSummary()

    /**
     * Set the value of [summary_label] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setSummaryLabel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->summary_label !== $v) {
            $this->summary_label = $v;
            $this->modifiedColumns[] = PmtRequestApprovedPeer::SUMMARY_LABEL;
        }

    } // setSummaryLabel()

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
            $this->modifiedColumns[] = PmtRequestApprovedPeer::USER_CONFIRM_NOTE;
        }

    } // setUserConfirmNote()

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

            $this->user_confirm = $rs->getInt($startcol + 3);

            $this->fna_approve = $rs->getInt($startcol + 4);

            $this->head_approve = $rs->getInt($startcol + 5);

            $this->legal_approve = $rs->getInt($startcol + 6);

            $this->line_manager_approve = $rs->getString($startcol + 7);

            $this->procurement_approve = $rs->getInt($startcol + 8);

            $this->request_approved = $rs->getInt($startcol + 9);

            $this->createuser = $rs->getString($startcol + 10);

            $this->createusername = $rs->getString($startcol + 11);

            $this->currentdepartment_label = $rs->getString($startcol + 12);

            $this->department_label = $rs->getString($startcol + 13);

            $this->erp_id = $rs->getFloat($startcol + 14);

            $this->erp_reason = $rs->getString($startcol + 15);

            $this->request_amount_total_label = $rs->getString($startcol + 16);

            $this->summary = $rs->getString($startcol + 17);

            $this->summary_label = $rs->getString($startcol + 18);

            $this->user_confirm_note = $rs->getString($startcol + 19);

            $this->resetModified();

            $this->setNew(false);

            // FIXME - using NUM_COLUMNS may be clearer.
            return $startcol + 20; // 20 = PmtRequestApprovedPeer::NUM_COLUMNS - PmtRequestApprovedPeer::NUM_LAZY_LOAD_COLUMNS).

        } catch (Exception $e) {
            throw new PropelException("Error populating PmtRequestApproved object", $e);
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
            $con = Propel::getConnection(PmtRequestApprovedPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            PmtRequestApprovedPeer::doDelete($this, $con);
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
            $con = Propel::getConnection(PmtRequestApprovedPeer::DATABASE_NAME);
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
                    $pk = PmtRequestApprovedPeer::doInsert($this, $con);
                    $affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
                                         // should always be true here (even though technically
                                         // BasePeer::doInsert() can insert multiple rows).

                    $this->setNew(false);
                } else {
                    $affectedRows += PmtRequestApprovedPeer::doUpdate($this, $con);
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


            if (($retval = PmtRequestApprovedPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PmtRequestApprovedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserConfirm();
                break;
            case 4:
                return $this->getFnaApprove();
                break;
            case 5:
                return $this->getHeadApprove();
                break;
            case 6:
                return $this->getLegalApprove();
                break;
            case 7:
                return $this->getLineManagerApprove();
                break;
            case 8:
                return $this->getProcurementApprove();
                break;
            case 9:
                return $this->getRequestApproved();
                break;
            case 10:
                return $this->getCreateuser();
                break;
            case 11:
                return $this->getCreateusername();
                break;
            case 12:
                return $this->getCurrentdepartmentLabel();
                break;
            case 13:
                return $this->getDepartmentLabel();
                break;
            case 14:
                return $this->getErpId();
                break;
            case 15:
                return $this->getErpReason();
                break;
            case 16:
                return $this->getRequestAmountTotalLabel();
                break;
            case 17:
                return $this->getSummary();
                break;
            case 18:
                return $this->getSummaryLabel();
                break;
            case 19:
                return $this->getUserConfirmNote();
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
        $keys = PmtRequestApprovedPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAppUid(),
            $keys[1] => $this->getAppNumber(),
            $keys[2] => $this->getAppStatus(),
            $keys[3] => $this->getUserConfirm(),
            $keys[4] => $this->getFnaApprove(),
            $keys[5] => $this->getHeadApprove(),
            $keys[6] => $this->getLegalApprove(),
            $keys[7] => $this->getLineManagerApprove(),
            $keys[8] => $this->getProcurementApprove(),
            $keys[9] => $this->getRequestApproved(),
            $keys[10] => $this->getCreateuser(),
            $keys[11] => $this->getCreateusername(),
            $keys[12] => $this->getCurrentdepartmentLabel(),
            $keys[13] => $this->getDepartmentLabel(),
            $keys[14] => $this->getErpId(),
            $keys[15] => $this->getErpReason(),
            $keys[16] => $this->getRequestAmountTotalLabel(),
            $keys[17] => $this->getSummary(),
            $keys[18] => $this->getSummaryLabel(),
            $keys[19] => $this->getUserConfirmNote(),
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
        $pos = PmtRequestApprovedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                $this->setUserConfirm($value);
                break;
            case 4:
                $this->setFnaApprove($value);
                break;
            case 5:
                $this->setHeadApprove($value);
                break;
            case 6:
                $this->setLegalApprove($value);
                break;
            case 7:
                $this->setLineManagerApprove($value);
                break;
            case 8:
                $this->setProcurementApprove($value);
                break;
            case 9:
                $this->setRequestApproved($value);
                break;
            case 10:
                $this->setCreateuser($value);
                break;
            case 11:
                $this->setCreateusername($value);
                break;
            case 12:
                $this->setCurrentdepartmentLabel($value);
                break;
            case 13:
                $this->setDepartmentLabel($value);
                break;
            case 14:
                $this->setErpId($value);
                break;
            case 15:
                $this->setErpReason($value);
                break;
            case 16:
                $this->setRequestAmountTotalLabel($value);
                break;
            case 17:
                $this->setSummary($value);
                break;
            case 18:
                $this->setSummaryLabel($value);
                break;
            case 19:
                $this->setUserConfirmNote($value);
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
        $keys = PmtRequestApprovedPeer::getFieldNames($keyType);

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
            $this->setUserConfirm($arr[$keys[3]]);
        }

        if (array_key_exists($keys[4], $arr)) {
            $this->setFnaApprove($arr[$keys[4]]);
        }

        if (array_key_exists($keys[5], $arr)) {
            $this->setHeadApprove($arr[$keys[5]]);
        }

        if (array_key_exists($keys[6], $arr)) {
            $this->setLegalApprove($arr[$keys[6]]);
        }

        if (array_key_exists($keys[7], $arr)) {
            $this->setLineManagerApprove($arr[$keys[7]]);
        }

        if (array_key_exists($keys[8], $arr)) {
            $this->setProcurementApprove($arr[$keys[8]]);
        }

        if (array_key_exists($keys[9], $arr)) {
            $this->setRequestApproved($arr[$keys[9]]);
        }

        if (array_key_exists($keys[10], $arr)) {
            $this->setCreateuser($arr[$keys[10]]);
        }

        if (array_key_exists($keys[11], $arr)) {
            $this->setCreateusername($arr[$keys[11]]);
        }

        if (array_key_exists($keys[12], $arr)) {
            $this->setCurrentdepartmentLabel($arr[$keys[12]]);
        }

        if (array_key_exists($keys[13], $arr)) {
            $this->setDepartmentLabel($arr[$keys[13]]);
        }

        if (array_key_exists($keys[14], $arr)) {
            $this->setErpId($arr[$keys[14]]);
        }

        if (array_key_exists($keys[15], $arr)) {
            $this->setErpReason($arr[$keys[15]]);
        }

        if (array_key_exists($keys[16], $arr)) {
            $this->setRequestAmountTotalLabel($arr[$keys[16]]);
        }

        if (array_key_exists($keys[17], $arr)) {
            $this->setSummary($arr[$keys[17]]);
        }

        if (array_key_exists($keys[18], $arr)) {
            $this->setSummaryLabel($arr[$keys[18]]);
        }

        if (array_key_exists($keys[19], $arr)) {
            $this->setUserConfirmNote($arr[$keys[19]]);
        }

    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return     Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PmtRequestApprovedPeer::DATABASE_NAME);

        if ($this->isColumnModified(PmtRequestApprovedPeer::APP_UID)) {
            $criteria->add(PmtRequestApprovedPeer::APP_UID, $this->app_uid);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::APP_NUMBER)) {
            $criteria->add(PmtRequestApprovedPeer::APP_NUMBER, $this->app_number);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::APP_STATUS)) {
            $criteria->add(PmtRequestApprovedPeer::APP_STATUS, $this->app_status);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::USER_CONFIRM)) {
            $criteria->add(PmtRequestApprovedPeer::USER_CONFIRM, $this->user_confirm);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::FNA_APPROVE)) {
            $criteria->add(PmtRequestApprovedPeer::FNA_APPROVE, $this->fna_approve);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::HEAD_APPROVE)) {
            $criteria->add(PmtRequestApprovedPeer::HEAD_APPROVE, $this->head_approve);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::LEGAL_APPROVE)) {
            $criteria->add(PmtRequestApprovedPeer::LEGAL_APPROVE, $this->legal_approve);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::LINE_MANAGER_APPROVE)) {
            $criteria->add(PmtRequestApprovedPeer::LINE_MANAGER_APPROVE, $this->line_manager_approve);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::PROCUREMENT_APPROVE)) {
            $criteria->add(PmtRequestApprovedPeer::PROCUREMENT_APPROVE, $this->procurement_approve);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::REQUEST_APPROVED)) {
            $criteria->add(PmtRequestApprovedPeer::REQUEST_APPROVED, $this->request_approved);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::CREATEUSER)) {
            $criteria->add(PmtRequestApprovedPeer::CREATEUSER, $this->createuser);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::CREATEUSERNAME)) {
            $criteria->add(PmtRequestApprovedPeer::CREATEUSERNAME, $this->createusername);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::CURRENTDEPARTMENT_LABEL)) {
            $criteria->add(PmtRequestApprovedPeer::CURRENTDEPARTMENT_LABEL, $this->currentdepartment_label);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::DEPARTMENT_LABEL)) {
            $criteria->add(PmtRequestApprovedPeer::DEPARTMENT_LABEL, $this->department_label);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::ERP_ID)) {
            $criteria->add(PmtRequestApprovedPeer::ERP_ID, $this->erp_id);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::ERP_REASON)) {
            $criteria->add(PmtRequestApprovedPeer::ERP_REASON, $this->erp_reason);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::REQUEST_AMOUNT_TOTAL_LABEL)) {
            $criteria->add(PmtRequestApprovedPeer::REQUEST_AMOUNT_TOTAL_LABEL, $this->request_amount_total_label);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::SUMMARY)) {
            $criteria->add(PmtRequestApprovedPeer::SUMMARY, $this->summary);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::SUMMARY_LABEL)) {
            $criteria->add(PmtRequestApprovedPeer::SUMMARY_LABEL, $this->summary_label);
        }

        if ($this->isColumnModified(PmtRequestApprovedPeer::USER_CONFIRM_NOTE)) {
            $criteria->add(PmtRequestApprovedPeer::USER_CONFIRM_NOTE, $this->user_confirm_note);
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
        $criteria = new Criteria(PmtRequestApprovedPeer::DATABASE_NAME);

        $criteria->add(PmtRequestApprovedPeer::APP_UID, $this->app_uid);

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
     * @param      object $copyObj An object of PmtRequestApproved (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @throws     PropelException
     */
    public function copyInto($copyObj, $deepCopy = false)
    {

        $copyObj->setAppNumber($this->app_number);

        $copyObj->setAppStatus($this->app_status);

        $copyObj->setUserConfirm($this->user_confirm);

        $copyObj->setFnaApprove($this->fna_approve);

        $copyObj->setHeadApprove($this->head_approve);

        $copyObj->setLegalApprove($this->legal_approve);

        $copyObj->setLineManagerApprove($this->line_manager_approve);

        $copyObj->setProcurementApprove($this->procurement_approve);

        $copyObj->setRequestApproved($this->request_approved);

        $copyObj->setCreateuser($this->createuser);

        $copyObj->setCreateusername($this->createusername);

        $copyObj->setCurrentdepartmentLabel($this->currentdepartment_label);

        $copyObj->setDepartmentLabel($this->department_label);

        $copyObj->setErpId($this->erp_id);

        $copyObj->setErpReason($this->erp_reason);

        $copyObj->setRequestAmountTotalLabel($this->request_amount_total_label);

        $copyObj->setSummary($this->summary);

        $copyObj->setSummaryLabel($this->summary_label);

        $copyObj->setUserConfirmNote($this->user_confirm_note);


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
     * @return     PmtRequestApproved Clone of current object.
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
     * @return     PmtRequestApprovedPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PmtRequestApprovedPeer();
        }
        return self::$peer;
    }
}

