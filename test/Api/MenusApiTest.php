<?php
/**
 * MenusApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flipdish Open API v1.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Flipdish\\Client;

use \Flipdish\\Client\Configuration;
use \Flipdish\\Client\ApiException;
use \Flipdish\\Client\ObjectSerializer;

/**
 * MenusApiTest Class Doc Comment
 *
 * @category Class
 * @package  Flipdish\\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MenusApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createDraftMenuFromExistingMenu
     *
     * [PRIVATE API]Clone a menu, (without attaching stores).
     *
     */
    public function testCreateDraftMenuFromExistingMenu()
    {
    }

    /**
     * Test case for createNewMenuAsync
     *
     * Create a new menu asynchronously.
     *
     */
    public function testCreateNewMenuAsync()
    {
    }

    /**
     * Test case for createNewMenuForApp
     *
     * Create a new menu.
     *
     */
    public function testCreateNewMenuForApp()
    {
    }

    /**
     * Test case for deleteMenu
     *
     * [PRIVATE API]Mark a Menu as Deleted.
     *
     */
    public function testDeleteMenu()
    {
    }

    /**
     * Test case for deleteMenuImage
     *
     * Delete menu image.
     *
     */
    public function testDeleteMenuImage()
    {
    }

    /**
     * Test case for deleteMenuItemMetadata
     *
     * Delete menu item metadata.
     *
     */
    public function testDeleteMenuItemMetadata()
    {
    }

    /**
     * Test case for getAllMenuMetadataByMenuIdAndStoreId
     *
     * Get all menu metadata by menu ID and store ID.
     *
     */
    public function testGetAllMenuMetadataByMenuIdAndStoreId()
    {
    }

    /**
     * Test case for getMenuById
     *
     * Get menu by identifier.
     *
     */
    public function testGetMenuById()
    {
    }

    /**
     * Test case for getMenuItemMetadata
     *
     * Get menu item metadata.
     *
     */
    public function testGetMenuItemMetadata()
    {
    }

    /**
     * Test case for getMenuItemMetadataByKey
     *
     * Get menu item metadata by key.
     *
     */
    public function testGetMenuItemMetadataByKey()
    {
    }

    /**
     * Test case for getMenuItemOptionSetItemMetadata
     *
     * Get menu item option set item metadata by key.
     *
     */
    public function testGetMenuItemOptionSetItemMetadata()
    {
    }

    /**
     * Test case for getMenuName
     *
     * [PRIVATE API]Get Menus Name.
     *
     */
    public function testGetMenuName()
    {
    }

    /**
     * Test case for getMenuStoreNames
     *
     * [PRIVATE API]Get menus store names.
     *
     */
    public function testGetMenuStoreNames()
    {
    }

    /**
     * Test case for getMenuTaxDetails
     *
     * [PRIVATE API]Get menus tax details.
     *
     */
    public function testGetMenuTaxDetails()
    {
    }

    /**
     * Test case for getMenusByAppId
     *
     * [PRIVATE API]Get menus by appId.
     *
     */
    public function testGetMenusByAppId()
    {
    }

    /**
     * Test case for getMenusCheckpoints
     *
     * [PRIVATE API]Get a Menus Checkpoints.
     *
     */
    public function testGetMenusCheckpoints()
    {
    }

    /**
     * Test case for menusDeleteTaxRate
     *
     * [PRIVATE API]Remove a Menus Tax Rate, can only remove a tax rate that does not have items/optionSetItems attached.
     *
     */
    public function testMenusDeleteTaxRate()
    {
    }

    /**
     * Test case for menusGetMenuBulkShowHide
     *
     * .
     *
     */
    public function testMenusGetMenuBulkShowHide()
    {
    }

    /**
     * Test case for menusSetDisplayOnMenuTax
     *
     * [PRIVATE API]Set if tax shows for a Menu.
     *
     */
    public function testMenusSetDisplayOnMenuTax()
    {
    }

    /**
     * Test case for menusSetItemDisplayOrders
     *
     * [PRIVATE API]Re-arrange Sections within a Menu.
     *
     */
    public function testMenusSetItemDisplayOrders()
    {
    }

    /**
     * Test case for menusShowHideBulkItems
     *
     * .
     *
     */
    public function testMenusShowHideBulkItems()
    {
    }

    /**
     * Test case for menusUpdateTaxType
     *
     * [PRIVATE API]Set the type of Tax on a Menu.
     *
     */
    public function testMenusUpdateTaxType()
    {
    }

    /**
     * Test case for menusUpsertTaxRate
     *
     * [PRIVATE API]Add/Update a Tax Rate.
     *
     */
    public function testMenusUpsertTaxRate()
    {
    }

    /**
     * Test case for restoreAMenuCheckpoint
     *
     * [PRIVATE API]Restore a Menu to a checkpoint.
     *
     */
    public function testRestoreAMenuCheckpoint()
    {
    }

    /**
     * Test case for setMenuItemMetadata
     *
     * Update menu item metadata.
     *
     */
    public function testSetMenuItemMetadata()
    {
    }

    /**
     * Test case for setMenuItemOptionSetItemMetadata
     *
     * Update menu item option set item metadata.
     *
     */
    public function testSetMenuItemOptionSetItemMetadata()
    {
    }

    /**
     * Test case for setMenuLock
     *
     * [PRIVATE API]Lock/Unlock a Menu for Editing.
     *
     */
    public function testSetMenuLock()
    {
    }

    /**
     * Test case for setMenuName
     *
     * [PRIVATE API]Set Menus Name.
     *
     */
    public function testSetMenuName()
    {
    }

    /**
     * Test case for updateMenu
     *
     * Update menu.
     *
     */
    public function testUpdateMenu()
    {
    }

    /**
     * Test case for uploadMenuImage
     *
     * Upload menu image.
     *
     */
    public function testUploadMenuImage()
    {
    }

    /**
     * Test case for uploadNewMenuForApp
     *
     * Create a new menu from xlsx file..
     *
     */
    public function testUploadNewMenuForApp()
    {
    }
}
