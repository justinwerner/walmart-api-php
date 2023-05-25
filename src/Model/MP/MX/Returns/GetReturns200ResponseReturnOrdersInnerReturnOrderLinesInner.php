<?php

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\MX\Returns;
use Walmart\Model\BaseModel;

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner Class Doc Comment
 *
 * @category Class

 * @description A list of order lines in the return order

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getReturns_200_response_returnOrders_inner_returnOrderLines_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'returnOrderLineNumber' => 'string',
        'primeLineNumber' => 'string',
        'returnReason' => 'string',
        'reasonCode' => 'string',
        'purchaseOrderId' => 'string',
        'purchaseOrderLineNumber' => 'string',
        'item' => '\Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItem',
        'charges' => '\Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInner[]',
        'unitPrice' => '\Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerUnitPrice',
        'chargeTotals' => '\Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargeTotalsInner[]',
        'quantity' => '\Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerQuantity',
        'status' => 'string',
        'statusTime' => 'string',
        'refundAmount' => '\Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerRefundAmount',
        'soPrimeLineSubLineNo' => 'string',
        'isWFSEnabled' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'returnOrderLineNumber' => null,
        'primeLineNumber' => null,
        'returnReason' => null,
        'reasonCode' => null,
        'purchaseOrderId' => null,
        'purchaseOrderLineNumber' => null,
        'item' => null,
        'charges' => null,
        'unitPrice' => null,
        'chargeTotals' => null,
        'quantity' => null,
        'status' => null,
        'statusTime' => null,
        'refundAmount' => null,
        'soPrimeLineSubLineNo' => null,
        'isWFSEnabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'returnOrderLineNumber' => false,
        'primeLineNumber' => false,
        'returnReason' => false,
        'reasonCode' => false,
        'purchaseOrderId' => false,
        'purchaseOrderLineNumber' => false,
        'item' => false,
        'charges' => false,
        'unitPrice' => false,
        'chargeTotals' => false,
        'quantity' => false,
        'status' => false,
        'statusTime' => false,
        'refundAmount' => false,
        'soPrimeLineSubLineNo' => false,
        'isWFSEnabled' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'returnOrderLineNumber' => 'returnOrderLineNumber',
        'primeLineNumber' => 'primeLineNumber',
        'returnReason' => 'returnReason',
        'reasonCode' => 'reasonCode',
        'purchaseOrderId' => 'purchaseOrderId',
        'purchaseOrderLineNumber' => 'purchaseOrderLineNumber',
        'item' => 'item',
        'charges' => 'charges',
        'unitPrice' => 'unitPrice',
        'chargeTotals' => 'chargeTotals',
        'quantity' => 'quantity',
        'status' => 'status',
        'statusTime' => 'statusTime',
        'refundAmount' => 'refundAmount',
        'soPrimeLineSubLineNo' => 'soPrimeLineSubLineNo',
        'isWFSEnabled' => 'isWFSEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'returnOrderLineNumber' => 'setReturnOrderLineNumber',
        'primeLineNumber' => 'setPrimeLineNumber',
        'returnReason' => 'setReturnReason',
        'reasonCode' => 'setReasonCode',
        'purchaseOrderId' => 'setPurchaseOrderId',
        'purchaseOrderLineNumber' => 'setPurchaseOrderLineNumber',
        'item' => 'setItem',
        'charges' => 'setCharges',
        'unitPrice' => 'setUnitPrice',
        'chargeTotals' => 'setChargeTotals',
        'quantity' => 'setQuantity',
        'status' => 'setStatus',
        'statusTime' => 'setStatusTime',
        'refundAmount' => 'setRefundAmount',
        'soPrimeLineSubLineNo' => 'setSoPrimeLineSubLineNo',
        'isWFSEnabled' => 'setIsWFSEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'returnOrderLineNumber' => 'getReturnOrderLineNumber',
        'primeLineNumber' => 'getPrimeLineNumber',
        'returnReason' => 'getReturnReason',
        'reasonCode' => 'getReasonCode',
        'purchaseOrderId' => 'getPurchaseOrderId',
        'purchaseOrderLineNumber' => 'getPurchaseOrderLineNumber',
        'item' => 'getItem',
        'charges' => 'getCharges',
        'unitPrice' => 'getUnitPrice',
        'chargeTotals' => 'getChargeTotals',
        'quantity' => 'getQuantity',
        'status' => 'getStatus',
        'statusTime' => 'getStatusTime',
        'refundAmount' => 'getRefundAmount',
        'soPrimeLineSubLineNo' => 'getSoPrimeLineSubLineNo',
        'isWFSEnabled' => 'getIsWFSEnabled'
    ];
    public const RETURN_REASON_CLIENTE_NO_SATISFECHO_GARANTA_AL_CLIENTE = 'Cliente no satisfecho/Garantía al cliente';

    public const RETURN_REASON_DAO_DURANTE_EL_TRASLADO = 'Daño durante el traslado';

    public const RETURN_REASON_DEFECTO_DE_FBRICA = 'Defecto de fábrica';

    public const RETURN_REASON_DUDA_DE_ENTREGA_ENTREGA_NO_RECONOCIDA = 'Duda de entrega/Entrega no reconocida';

    public const RETURN_REASON_ERROR_AL_CREAR_LA_VENTA = 'Error al crear la venta';

    public const RETURN_REASON_ERROR_DE_CARACTERSTICAS_EN_EL_SITIO = 'Error de características en el sitio';

    public const RETURN_REASON_ERROR_DEL_CLIENTE = 'Error del Cliente';

    public const RETURN_REASON_EXCEPCIN_DE_ENTREGA__NO_SE_PUDO_ENTREGAR = 'Excepción de entrega/ No se pudo entregar';

    public const RETURN_REASON_MODELO_SURTIDO_NO_CORRESPONDE_AL_COMPRADO = 'Modelo surtido no corresponde al comprado';

    public const RETURN_REASON_NO_RESPETA_PARCIALIZACIN_A_MSI = 'No respeta parcialización a MSI';

    public const RETURN_REASON_PEDIDO_EXTRAVIADO_POR_COURIER = 'Pedido extraviado por Courier';

    public const RETURN_REASON_PEDIDO_LLEGO_INCOMPLETO = 'Pedido llego incompleto';

    public const RETURN_REASON_PEDIDO_ROBADO = 'Pedido robado';

    public const RETURN_REASON_PROBLEMA_AL_APLICAR_CUPN_O_PROMOCION = 'Problema al aplicar cupón o promocion';

    public const RETURN_REASON_ROBO_O_EXTRAVO_DE_MERCANCA_EN_TIENDA = 'Robo o extravío de mercancía en tienda';

    public const RETURN_REASON_RETRASO_DE_SURTIDO = 'Retraso de Surtido';

    public const RETURN_REASON_ACTIVIDAD_SOSPECHOSA = 'Actividad Sospechosa';

    public const RETURN_REASON_ERROR_DE_PRECIO = 'Error de Precio';

    public const RETURN_REASON_RETRASO_EN_ENTREGA__FECHA_PROMESA_EXCEDIDA = 'Retraso en Entrega (fecha promesa excedida)';

    public const RETURN_REASON_LLEG_TARDE__FECHA_PROMESA_EXCEDIDA = 'Llegó Tarde (fecha promesa excedida)';

    public const RETURN_REASON_SIN_INVENTARIO = 'Sin Inventario';

    public const REASON_CODE_CUSTOMER_GUARANTEE = 'CUSTOMER_GUARANTEE';

    public const REASON_CODE_DAMAGED_TRANSFER = 'DAMAGED_TRANSFER';

    public const REASON_CODE_FACTORY_DEFECT = 'FACTORY_DEFECT';

    public const REASON_CODE_DELIVERY_DOUBT = 'DELIVERY_DOUBT';

    public const REASON_CODE_SALES_ERROR = 'SALES_ERROR';

    public const REASON_CODE_SITE_FEATURE = 'SITE_FEATURE';

    public const REASON_CODE_CUSTOMER_ERROR = 'CUSTOMER_ERROR';

    public const REASON_CODE_DELIVERY_EXCEPTION = 'DELIVERY_EXCEPTION';

    public const REASON_CODE_ASSORTED_MODEL = 'ASSORTED_MODEL';

    public const REASON_CODE_WITHOUT_INTEREST = 'WITHOUT_INTEREST';

    public const REASON_CODE_COURIER_LOST = 'COURIER_LOST';

    public const REASON_CODE_ORDER_INCOMPLETE = 'ORDER_INCOMPLETE';

    public const REASON_CODE_COURIER_STOLEN = 'COURIER_STOLEN';

    public const REASON_CODE_PROMO_PROBLEM = 'PROMO_PROBLEM';

    public const REASON_CODE_STORE_LOST = 'STORE_LOST';

    public const REASON_CODE_DELAY_FULFILLMENT = 'DELAY_FULFILLMENT';

    public const REASON_CODE_SUSPICIOUS_ACTIVITY = 'SUSPICIOUS_ACTIVITY';

    public const REASON_CODE_PRICE_ERROR = 'PRICE ERROR';

    public const REASON_CODE_DELAY_DELIVERY = 'DELAY_DELIVERY';

    public const REASON_CODE_ARRIVED_LATE = 'ARRIVED_LATE';

    public const REASON_CODE_NO_INVENTORY = 'NO_INVENTORY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReturnReasonAllowableValues()
    {
        return [
            self::RETURN_REASON_CLIENTE_NO_SATISFECHO_GARANTA_AL_CLIENTE,
            self::RETURN_REASON_DAO_DURANTE_EL_TRASLADO,
            self::RETURN_REASON_DEFECTO_DE_FBRICA,
            self::RETURN_REASON_DUDA_DE_ENTREGA_ENTREGA_NO_RECONOCIDA,
            self::RETURN_REASON_ERROR_AL_CREAR_LA_VENTA,
            self::RETURN_REASON_ERROR_DE_CARACTERSTICAS_EN_EL_SITIO,
            self::RETURN_REASON_ERROR_DEL_CLIENTE,
            self::RETURN_REASON_EXCEPCIN_DE_ENTREGA__NO_SE_PUDO_ENTREGAR,
            self::RETURN_REASON_MODELO_SURTIDO_NO_CORRESPONDE_AL_COMPRADO,
            self::RETURN_REASON_NO_RESPETA_PARCIALIZACIN_A_MSI,
            self::RETURN_REASON_PEDIDO_EXTRAVIADO_POR_COURIER,
            self::RETURN_REASON_PEDIDO_LLEGO_INCOMPLETO,
            self::RETURN_REASON_PEDIDO_ROBADO,
            self::RETURN_REASON_PROBLEMA_AL_APLICAR_CUPN_O_PROMOCION,
            self::RETURN_REASON_ROBO_O_EXTRAVO_DE_MERCANCA_EN_TIENDA,
            self::RETURN_REASON_RETRASO_DE_SURTIDO,
            self::RETURN_REASON_ACTIVIDAD_SOSPECHOSA,
            self::RETURN_REASON_ERROR_DE_PRECIO,
            self::RETURN_REASON_RETRASO_EN_ENTREGA__FECHA_PROMESA_EXCEDIDA,
            self::RETURN_REASON_LLEG_TARDE__FECHA_PROMESA_EXCEDIDA,
            self::RETURN_REASON_SIN_INVENTARIO,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonCodeAllowableValues()
    {
        return [
            self::REASON_CODE_CUSTOMER_GUARANTEE,
            self::REASON_CODE_DAMAGED_TRANSFER,
            self::REASON_CODE_FACTORY_DEFECT,
            self::REASON_CODE_DELIVERY_DOUBT,
            self::REASON_CODE_SALES_ERROR,
            self::REASON_CODE_SITE_FEATURE,
            self::REASON_CODE_CUSTOMER_ERROR,
            self::REASON_CODE_DELIVERY_EXCEPTION,
            self::REASON_CODE_ASSORTED_MODEL,
            self::REASON_CODE_WITHOUT_INTEREST,
            self::REASON_CODE_COURIER_LOST,
            self::REASON_CODE_ORDER_INCOMPLETE,
            self::REASON_CODE_COURIER_STOLEN,
            self::REASON_CODE_PROMO_PROBLEM,
            self::REASON_CODE_STORE_LOST,
            self::REASON_CODE_DELAY_FULFILLMENT,
            self::REASON_CODE_SUSPICIOUS_ACTIVITY,
            self::REASON_CODE_PRICE_ERROR,
            self::REASON_CODE_DELAY_DELIVERY,
            self::REASON_CODE_ARRIVED_LATE,
            self::REASON_CODE_NO_INVENTORY,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('returnOrderLineNumber', $data ?? [], null);
        $this->setIfExists('primeLineNumber', $data ?? [], null);
        $this->setIfExists('returnReason', $data ?? [], null);
        $this->setIfExists('reasonCode', $data ?? [], null);
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('purchaseOrderLineNumber', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('charges', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('chargeTotals', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('statusTime', $data ?? [], null);
        $this->setIfExists('refundAmount', $data ?? [], null);
        $this->setIfExists('soPrimeLineSubLineNo', $data ?? [], null);
        $this->setIfExists('isWFSEnabled', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReturnReasonAllowableValues();
        if (!is_null($this->container['returnReason']) && !in_array($this->container['returnReason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'returnReason', must be one of '%s'",
                $this->container['returnReason'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($this->container['reasonCode']) && !in_array($this->container['reasonCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reasonCode', must be one of '%s'",
                $this->container['reasonCode'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }
    /**
     * Gets returnOrderLineNumber
     *
     * @return string|null
    
     */
    public function getReturnOrderLineNumber()
    {
        return $this->container['returnOrderLineNumber'];
    }

    /**
     * Sets returnOrderLineNumber
     *
     * @param string|null $returnOrderLineNumber The returns order line number for that return
     *
     * @return self
    
     */
    public function setReturnOrderLineNumber($returnOrderLineNumber)
    {
        if (is_null($returnOrderLineNumber)) {
            throw new \InvalidArgumentException('non-nullable returnOrderLineNumber cannot be null');
        }

        $this->container['returnOrderLineNumber'] = $returnOrderLineNumber;
        return $this;
    }

    /**
     * Gets primeLineNumber
     *
     * @return string|null
    
     */
    public function getPrimeLineNumber()
    {
        return $this->container['primeLineNumber'];
    }

    /**
     * Sets primeLineNumber
     *
     * @param string|null $primeLineNumber The purchase order line number for the return created
     *
     * @return self
    
     */
    public function setPrimeLineNumber($primeLineNumber)
    {
        if (is_null($primeLineNumber)) {
            throw new \InvalidArgumentException('non-nullable primeLineNumber cannot be null');
        }

        $this->container['primeLineNumber'] = $primeLineNumber;
        return $this;
    }

    /**
     * Gets returnReason
     *
     * @return string|null
    
     */
    public function getReturnReason()
    {
        return $this->container['returnReason'];
    }

    /**
     * Sets returnReason
     *
     * @param string|null $returnReason Gives the reason that was selected during the return creation.
     *
     * @return self
    
     */
    public function setReturnReason($returnReason)
    {
        if (is_null($returnReason)) {
            throw new \InvalidArgumentException('non-nullable returnReason cannot be null');
        }
        $allowedValues = $this->getReturnReasonAllowableValues();
        if (!in_array($returnReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'returnReason', must be one of '%s'",
                    $returnReason,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['returnReason'] = $returnReason;
        return $this;
    }

    /**
     * Gets reasonCode
     *
     * @return string|null
    
     */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
     * Sets reasonCode
     *
     * @param string|null $reasonCode Gives the return reason code associated with returnReason
     *
     * @return self
    
     */
    public function setReasonCode($reasonCode)
    {
        if (is_null($reasonCode)) {
            throw new \InvalidArgumentException('non-nullable reasonCode cannot be null');
        }
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!in_array($reasonCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reasonCode', must be one of '%s'",
                    $reasonCode,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['reasonCode'] = $reasonCode;
        return $this;
    }

    /**
     * Gets purchaseOrderId
     *
     * @return string|null
    
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchaseOrderId'];
    }

    /**
     * Sets purchaseOrderId
     *
     * @param string|null $purchaseOrderId The purchase order ID for the return created
     *
     * @return self
    
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        if (is_null($purchaseOrderId)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderId cannot be null');
        }

        $this->container['purchaseOrderId'] = $purchaseOrderId;
        return $this;
    }

    /**
     * Gets purchaseOrderLineNumber
     *
     * @return string|null
    
     */
    public function getPurchaseOrderLineNumber()
    {
        return $this->container['purchaseOrderLineNumber'];
    }

    /**
     * Sets purchaseOrderLineNumber
     *
     * @param string|null $purchaseOrderLineNumber The purchase order line number for the return created
     *
     * @return self
    
     */
    public function setPurchaseOrderLineNumber($purchaseOrderLineNumber)
    {
        if (is_null($purchaseOrderLineNumber)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderLineNumber cannot be null');
        }

        $this->container['purchaseOrderLineNumber'] = $purchaseOrderLineNumber;
        return $this;
    }

    /**
     * Gets item
     *
     * @return \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItem|null
    
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerItem|null $item item
     *
     * @return self
    
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }

        $this->container['item'] = $item;
        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInner[]|null
    
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInner[]|null $charges Information relating to the charge for the orderLine
     *
     * @return self
    
     */
    public function setCharges($charges)
    {
        if (is_null($charges)) {
            throw new \InvalidArgumentException('non-nullable charges cannot be null');
        }

        $this->container['charges'] = $charges;
        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerUnitPrice|null
    
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerUnitPrice|null $unitPrice unitPrice
     *
     * @return self
    
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }

        $this->container['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Gets chargeTotals
     *
     * @return \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargeTotalsInner[]|null
    
     */
    public function getChargeTotals()
    {
        return $this->container['chargeTotals'];
    }

    /**
     * Sets chargeTotals
     *
     * @param \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargeTotalsInner[]|null $chargeTotals Contains name value pairs of calculated charges for the line. Eg: if order line has 3 Qty, this will have a shipping charge = 3 * shipping charge per unit (This is present in the line level charges).
     *
     * @return self
    
     */
    public function setChargeTotals($chargeTotals)
    {
        if (is_null($chargeTotals)) {
            throw new \InvalidArgumentException('non-nullable chargeTotals cannot be null');
        }

        $this->container['chargeTotals'] = $chargeTotals;
        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerQuantity|null
    
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerQuantity|null $quantity quantity
     *
     * @return self
    
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Current status of return. (e.g., 'INITIATED')
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets statusTime
     *
     * @return string|null
    
     */
    public function getStatusTime()
    {
        return $this->container['statusTime'];
    }

    /**
     * Sets statusTime
     *
     * @param string|null $statusTime Timestamp of listed status change
     *
     * @return self
    
     */
    public function setStatusTime($statusTime)
    {
        if (is_null($statusTime)) {
            throw new \InvalidArgumentException('non-nullable statusTime cannot be null');
        }

        $this->container['statusTime'] = $statusTime;
        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerRefundAmount|null
    
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param \Walmart\Model\MP\MX\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerRefundAmount|null $refundAmount refundAmount
     *
     * @return self
    
     */
    public function setRefundAmount($refundAmount)
    {
        if (is_null($refundAmount)) {
            throw new \InvalidArgumentException('non-nullable refundAmount cannot be null');
        }

        $this->container['refundAmount'] = $refundAmount;
        return $this;
    }

    /**
     * Gets soPrimeLineSubLineNo
     *
     * @return string|null
    
     */
    public function getSoPrimeLineSubLineNo()
    {
        return $this->container['soPrimeLineSubLineNo'];
    }

    /**
     * Sets soPrimeLineSubLineNo
     *
     * @param string|null $soPrimeLineSubLineNo soPrimeLineSubLineNo
     *
     * @return self
    
     */
    public function setSoPrimeLineSubLineNo($soPrimeLineSubLineNo)
    {
        if (is_null($soPrimeLineSubLineNo)) {
            throw new \InvalidArgumentException('non-nullable soPrimeLineSubLineNo cannot be null');
        }

        $this->container['soPrimeLineSubLineNo'] = $soPrimeLineSubLineNo;
        return $this;
    }

    /**
     * Gets isWFSEnabled
     *
     * @return string|null
    
     */
    public function getIsWFSEnabled()
    {
        return $this->container['isWFSEnabled'];
    }

    /**
     * Sets isWFSEnabled
     *
     * @param string|null $isWFSEnabled Determines Walmart Fulfilled vs Seller Fulfilled returns. Valid values are: Y, N
     *
     * @return self
    
     */
    public function setIsWFSEnabled($isWFSEnabled)
    {
        if (is_null($isWFSEnabled)) {
            throw new \InvalidArgumentException('non-nullable isWFSEnabled cannot be null');
        }

        $this->container['isWFSEnabled'] = $isWFSEnabled;
        return $this;
    }
}


