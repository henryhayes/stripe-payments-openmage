<?php

/**
 * Signals that a Stripe PaymentIntent needs customer authentication.
 *
 * This is not a terminal payment failure. Extending Mage_Payment_Model_Info_Exception
 * lets Magento return the message to checkout without sending the standard failed
 * payment notification email.
 */
class Stripe_Payments_Exception_AuthenticationRequired extends Mage_Payment_Model_Info_Exception
{
    //
}
