<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\CompanyUserDataImport\Business\Model\DataSet;

interface CompanyUserDataSetInterface
{
    /**
     * @var string
     */
    public const COLUMN_COMPANY_USER_KEY = 'company_user_key';

    /**
     * @var string
     */
    public const COLUMN_CUSTOMER_REFERENCE = 'customer_reference';

    /**
     * @var string
     */
    public const COLUMN_COMPANY_KEY = 'company_key';

    /**
     * @var string
     */
    public const COLUMN_IS_DEFAULT = 'is_default';
}
