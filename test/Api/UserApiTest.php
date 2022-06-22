<?php
/**
 * UserApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 3.1 Reference
 *
 * ### Authorization  The classic method of API authorization uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://looker.com/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs.  For details, see the [API Explorer documentation](https://looker.com/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://looker.com/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://looker.com/docs/r/api/versioning).   ### 3.1 Legacy API  API 3.1 is now **deprecated**. API 4.0 should be used instead.  The text below is retained for reference purposes.  The following are a few examples of noteworthy items that have changed between API 3.0 and API 3.1. For more comprehensive coverage of API changes, please see the release notes for your Looker release.  ### Examples of new things added in API 3.1 (compared to API 3.0):  * [Dashboard construction](#!/3.1/Dashboard/) APIs * [Themes](#!/3.1/Theme/) and [custom color collections](#!/3.1/ColorCollection) APIs * Create and run [SQL Runner](#!/3.1/Query/run_sql_query) queries * Create and run [merged results](#!/3.1/Query/create_merge_query) queries * Create and modify [dashboard filters](#!/3.1/Dashboard/create_dashboard_filter) * Create and modify [password requirements](#!/3.1/Auth/password_config)  ### Deprecated in API 3.0  The following functions and properties have been deprecated in API 3.0.  They continue to exist and work in API 3.0 for the next several Looker releases but they have not been carried forward to API 3.1:  * Dashboard Prefetch functions * User access_filter functions * User API 1.0 credentials functions * Space.is_root and Space.is_user_root properties. Use Space.is_shared_root and Space.is_users_root instead.  ### Semantic changes in API 3.1:  * [all_looks()](#!/3.1/Look/all_looks) no longer includes soft-deleted looks, matching [all_dashboards()](#!/3.1/Dashboard/all_dashboards) behavior. You can find soft-deleted looks using [search_looks()](#!/3.1/Look/search_looks) with the `deleted` param set to True. * [all_spaces()](#!/3.1/Space/all_spaces) no longer includes duplicate items * [search_users()](#!/3.1/User/search_users) no longer accepts Y,y,1,0,N,n for Boolean params, only \"true\" and \"false\". * For greater client and network compatibility, [render_task_results](#!/3.1/RenderTask/render_task_results) now returns HTTP status **202 Accepted** instead of HTTP status **102 Processing** * [all_running_queries()](#!/3.1/Query/all_running_queries) and [kill_query](#!/3.1/Query/kill_query) functions have moved into the [Query](#!/3.1/Query/) function group.  The API Explorer can be used to [interactively compare](https://looker.com/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.   ### API and SDK Support Policies  Looker API versions and language SDKs have varying support levels. Please read the API and SDK [support policies](https://looker.com/docs/r/api/support-policy) for more information.
 *
 * OpenAPI spec version: 3.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * UserApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for allUserCredentialsApi3s
     *
     * Get All API 3 Credentials.
     *
     */
    public function testAllUserCredentialsApi3s()
    {
    }

    /**
     * Test case for allUserCredentialsEmbeds
     *
     * Get All Embedding Credentials.
     *
     */
    public function testAllUserCredentialsEmbeds()
    {
    }

    /**
     * Test case for allUserSessions
     *
     * Get All Web Login Sessions.
     *
     */
    public function testAllUserSessions()
    {
    }

    /**
     * Test case for allUsers
     *
     * Get All Users.
     *
     */
    public function testAllUsers()
    {
    }

    /**
     * Test case for createUser
     *
     * Create User.
     *
     */
    public function testCreateUser()
    {
    }

    /**
     * Test case for createUserCredentialsApi3
     *
     * Create API 3 Credential.
     *
     */
    public function testCreateUserCredentialsApi3()
    {
    }

    /**
     * Test case for createUserCredentialsEmail
     *
     * Create Email/Password Credential.
     *
     */
    public function testCreateUserCredentialsEmail()
    {
    }

    /**
     * Test case for createUserCredentialsEmailPasswordReset
     *
     * Create Password Reset Token.
     *
     */
    public function testCreateUserCredentialsEmailPasswordReset()
    {
    }

    /**
     * Test case for createUserCredentialsTotp
     *
     * Create Two-Factor Credential.
     *
     */
    public function testCreateUserCredentialsTotp()
    {
    }

    /**
     * Test case for deleteUser
     *
     * Delete User.
     *
     */
    public function testDeleteUser()
    {
    }

    /**
     * Test case for deleteUserAttributeUserValue
     *
     * Delete User Attribute User Value.
     *
     */
    public function testDeleteUserAttributeUserValue()
    {
    }

    /**
     * Test case for deleteUserCredentialsApi3
     *
     * Delete API 3 Credential.
     *
     */
    public function testDeleteUserCredentialsApi3()
    {
    }

    /**
     * Test case for deleteUserCredentialsEmail
     *
     * Delete Email/Password Credential.
     *
     */
    public function testDeleteUserCredentialsEmail()
    {
    }

    /**
     * Test case for deleteUserCredentialsEmbed
     *
     * Delete Embedding Credential.
     *
     */
    public function testDeleteUserCredentialsEmbed()
    {
    }

    /**
     * Test case for deleteUserCredentialsGoogle
     *
     * Delete Google Auth Credential.
     *
     */
    public function testDeleteUserCredentialsGoogle()
    {
    }

    /**
     * Test case for deleteUserCredentialsLdap
     *
     * Delete LDAP Credential.
     *
     */
    public function testDeleteUserCredentialsLdap()
    {
    }

    /**
     * Test case for deleteUserCredentialsLookerOpenid
     *
     * Delete Looker OpenId Credential.
     *
     */
    public function testDeleteUserCredentialsLookerOpenid()
    {
    }

    /**
     * Test case for deleteUserCredentialsOidc
     *
     * Delete OIDC Auth Credential.
     *
     */
    public function testDeleteUserCredentialsOidc()
    {
    }

    /**
     * Test case for deleteUserCredentialsSaml
     *
     * Delete Saml Auth Credential.
     *
     */
    public function testDeleteUserCredentialsSaml()
    {
    }

    /**
     * Test case for deleteUserCredentialsTotp
     *
     * Delete Two-Factor Credential.
     *
     */
    public function testDeleteUserCredentialsTotp()
    {
    }

    /**
     * Test case for deleteUserSession
     *
     * Delete Web Login Session.
     *
     */
    public function testDeleteUserSession()
    {
    }

    /**
     * Test case for me
     *
     * Get Current User.
     *
     */
    public function testMe()
    {
    }

    /**
     * Test case for searchUsers
     *
     * Search Users.
     *
     */
    public function testSearchUsers()
    {
    }

    /**
     * Test case for searchUsersNames
     *
     * Search User Names.
     *
     */
    public function testSearchUsersNames()
    {
    }

    /**
     * Test case for setUserAttributeUserValue
     *
     * Set User Attribute User Value.
     *
     */
    public function testSetUserAttributeUserValue()
    {
    }

    /**
     * Test case for setUserRoles
     *
     * Set User Roles.
     *
     */
    public function testSetUserRoles()
    {
    }

    /**
     * Test case for updateUser
     *
     * Update User.
     *
     */
    public function testUpdateUser()
    {
    }

    /**
     * Test case for updateUserCredentialsEmail
     *
     * Update Email/Password Credential.
     *
     */
    public function testUpdateUserCredentialsEmail()
    {
    }

    /**
     * Test case for user
     *
     * Get User by Id.
     *
     */
    public function testUser()
    {
    }

    /**
     * Test case for userAttributeUserValues
     *
     * Get User Attribute Values.
     *
     */
    public function testUserAttributeUserValues()
    {
    }

    /**
     * Test case for userCredentialsApi3
     *
     * Get API 3 Credential.
     *
     */
    public function testUserCredentialsApi3()
    {
    }

    /**
     * Test case for userCredentialsEmail
     *
     * Get Email/Password Credential.
     *
     */
    public function testUserCredentialsEmail()
    {
    }

    /**
     * Test case for userCredentialsEmbed
     *
     * Get Embedding Credential.
     *
     */
    public function testUserCredentialsEmbed()
    {
    }

    /**
     * Test case for userCredentialsGoogle
     *
     * Get Google Auth Credential.
     *
     */
    public function testUserCredentialsGoogle()
    {
    }

    /**
     * Test case for userCredentialsLdap
     *
     * Get LDAP Credential.
     *
     */
    public function testUserCredentialsLdap()
    {
    }

    /**
     * Test case for userCredentialsLookerOpenid
     *
     * Get Looker OpenId Credential.
     *
     */
    public function testUserCredentialsLookerOpenid()
    {
    }

    /**
     * Test case for userCredentialsOidc
     *
     * Get OIDC Auth Credential.
     *
     */
    public function testUserCredentialsOidc()
    {
    }

    /**
     * Test case for userCredentialsSaml
     *
     * Get Saml Auth Credential.
     *
     */
    public function testUserCredentialsSaml()
    {
    }

    /**
     * Test case for userCredentialsTotp
     *
     * Get Two-Factor Credential.
     *
     */
    public function testUserCredentialsTotp()
    {
    }

    /**
     * Test case for userForCredential
     *
     * Get User by Credential Id.
     *
     */
    public function testUserForCredential()
    {
    }

    /**
     * Test case for userRoles
     *
     * Get User Roles.
     *
     */
    public function testUserRoles()
    {
    }

    /**
     * Test case for userSession
     *
     * Get Web Login Session.
     *
     */
    public function testUserSession()
    {
    }
}