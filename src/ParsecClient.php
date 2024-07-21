<?php

namespace LazyTechwork\Parsec;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ParsecClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface&Types\CreatePassageRole $parameters
     *
     * @return ResultInterface&Types\CreatePassageRoleResponse
     *
     * @throws SoapException
     */
    public function createPassageRole(Types\CreatePassageRole $parameters): Types\CreatePassageRoleResponse
    {
        $response = ($this->caller)('CreatePassageRole', $parameters);

        \Psl\Type\instance_of(Types\CreatePassageRoleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SavePassageRole $parameters
     *
     * @return ResultInterface&Types\SavePassageRoleResponse
     *
     * @throws SoapException
     */
    public function savePassageRole(Types\SavePassageRole $parameters): Types\SavePassageRoleResponse
    {
        $response = ($this->caller)('SavePassageRole', $parameters);

        \Psl\Type\instance_of(Types\SavePassageRoleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeletePassageRole $parameters
     *
     * @return ResultInterface&Types\DeletePassageRoleResponse
     *
     * @throws SoapException
     */
    public function deletePassageRole(Types\DeletePassageRole $parameters): Types\DeletePassageRoleResponse
    {
        $response = ($this->caller)('DeletePassageRole', $parameters);

        \Psl\Type\instance_of(Types\DeletePassageRoleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetIdentifierExtraData $parameters
     *
     * @return ResultInterface&Types\GetIdentifierExtraDataResponse
     *
     * @throws SoapException
     */
    public function getIdentifierExtraData(Types\GetIdentifierExtraData $parameters): Types\GetIdentifierExtraDataResponse
    {
        $response = ($this->caller)('GetIdentifierExtraData', $parameters);

        \Psl\Type\instance_of(Types\GetIdentifierExtraDataResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetIdentifierExtraData $parameters
     *
     * @return ResultInterface&Types\SetIdentifierExtraDataResponse
     *
     * @throws SoapException
     */
    public function setIdentifierExtraData(Types\SetIdentifierExtraData $parameters): Types\SetIdentifierExtraDataResponse
    {
        $response = ($this->caller)('SetIdentifierExtraData', $parameters);

        \Psl\Type\instance_of(Types\SetIdentifierExtraDataResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonWorktimeSchedule $parameters
     *
     * @return ResultInterface&Types\GetPersonWorktimeScheduleResponse
     *
     * @throws SoapException
     */
    public function getPersonWorktimeSchedule(Types\GetPersonWorktimeSchedule $parameters): Types\GetPersonWorktimeScheduleResponse
    {
        $response = ($this->caller)('GetPersonWorktimeSchedule', $parameters);

        \Psl\Type\instance_of(Types\GetPersonWorktimeScheduleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetPersonWorktimeSchedule $parameters
     *
     * @return ResultInterface&Types\SetPersonWorktimeScheduleResponse
     *
     * @throws SoapException
     */
    public function setPersonWorktimeSchedule(Types\SetPersonWorktimeSchedule $parameters): Types\SetPersonWorktimeScheduleResponse
    {
        $response = ($this->caller)('SetPersonWorktimeSchedule', $parameters);

        \Psl\Type\instance_of(Types\SetPersonWorktimeScheduleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetMultiplePersons $parameters
     *
     * @return ResultInterface&Types\GetMultiplePersonsResponse
     *
     * @throws SoapException
     */
    public function getMultiplePersons(Types\GetMultiplePersons $parameters): Types\GetMultiplePersonsResponse
    {
        $response = ($this->caller)('GetMultiplePersons', $parameters);

        \Psl\Type\instance_of(Types\GetMultiplePersonsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetMultipleBioIdentifiers $parameters
     *
     * @return ResultInterface&Types\GetMultipleBioIdentifiersResponse
     *
     * @throws SoapException
     */
    public function getMultipleBioIdentifiers(Types\GetMultipleBioIdentifiers $parameters): Types\GetMultipleBioIdentifiersResponse
    {
        $response = ($this->caller)('GetMultipleBioIdentifiers', $parameters);

        \Psl\Type\instance_of(Types\GetMultipleBioIdentifiersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\PersonSearch $parameters
     *
     * @return ResultInterface&Types\PersonSearchResponse
     *
     * @throws SoapException
     */
    public function personSearch(Types\PersonSearch $parameters): Types\PersonSearchResponse
    {
        $response = ($this->caller)('PersonSearch', $parameters);

        \Psl\Type\instance_of(Types\PersonSearchResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetObjectName $parameters
     *
     * @return ResultInterface&Types\GetObjectNameResponse
     *
     * @throws SoapException
     */
    public function getObjectName(Types\GetObjectName $parameters): Types\GetObjectNameResponse
    {
        $response = ($this->caller)('GetObjectName', $parameters);

        \Psl\Type\instance_of(Types\GetObjectNameResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SendVerificationCommand $parameters
     *
     * @return ResultInterface&Types\SendVerificationCommandResponse
     *
     * @throws SoapException
     */
    public function sendVerificationCommand(Types\SendVerificationCommand $parameters): Types\SendVerificationCommandResponse
    {
        $response = ($this->caller)('SendVerificationCommand', $parameters);

        \Psl\Type\instance_of(Types\SendVerificationCommandResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetUnique4bCardCode $parameters
     *
     * @return ResultInterface&Types\GetUnique4bCardCodeResponse
     *
     * @throws SoapException
     */
    public function getUnique4bCardCode(Types\GetUnique4bCardCode $parameters): Types\GetUnique4bCardCodeResponse
    {
        $response = ($this->caller)('GetUnique4bCardCode', $parameters);

        \Psl\Type\instance_of(Types\GetUnique4bCardCodeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetCardCodeFromUID $parameters
     *
     * @return ResultInterface&Types\GetCardCodeFromUIDResponse
     *
     * @throws SoapException
     */
    public function getCardCodeFromUID(Types\GetCardCodeFromUID $parameters): Types\GetCardCodeFromUIDResponse
    {
        $response = ($this->caller)('GetCardCodeFromUID', $parameters);

        \Psl\Type\instance_of(Types\GetCardCodeFromUIDResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GenerateParsecQRCode $parameters
     *
     * @return ResultInterface&Types\GenerateParsecQRCodeResponse
     *
     * @throws SoapException
     */
    public function generateParsecQRCode(Types\GenerateParsecQRCode $parameters): Types\GenerateParsecQRCodeResponse
    {
        $response = ($this->caller)('GenerateParsecQRCode', $parameters);

        \Psl\Type\instance_of(Types\GenerateParsecQRCodeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GenerateAdvancedParsecQRCode $parameters
     *
     * @return ResultInterface&Types\GenerateAdvancedParsecQRCodeResponse
     *
     * @throws SoapException
     */
    public function generateAdvancedParsecQRCode(Types\GenerateAdvancedParsecQRCode $parameters): Types\GenerateAdvancedParsecQRCodeResponse
    {
        $response = ($this->caller)('GenerateAdvancedParsecQRCode', $parameters);

        \Psl\Type\instance_of(Types\GenerateAdvancedParsecQRCodeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetAdvancedQRGroups $parameters
     *
     * @return ResultInterface&Types\GetAdvancedQRGroupsResponse
     *
     * @throws SoapException
     */
    public function getAdvancedQRGroups(Types\GetAdvancedQRGroups $parameters): Types\GetAdvancedQRGroupsResponse
    {
        $response = ($this->caller)('GetAdvancedQRGroups', $parameters);

        \Psl\Type\instance_of(Types\GetAdvancedQRGroupsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateAdvancedQRQGroup $parameters
     *
     * @return ResultInterface&Types\CreateAdvancedQRQGroupResponse
     *
     * @throws SoapException
     */
    public function createAdvancedQRQGroup(Types\CreateAdvancedQRQGroup $parameters): Types\CreateAdvancedQRQGroupResponse
    {
        $response = ($this->caller)('CreateAdvancedQRQGroup', $parameters);

        \Psl\Type\instance_of(Types\CreateAdvancedQRQGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteAdvancedQRQGroup $parameters
     *
     * @return ResultInterface&Types\DeleteAdvancedQRQGroupResponse
     *
     * @throws SoapException
     */
    public function deleteAdvancedQRQGroup(Types\DeleteAdvancedQRQGroup $parameters): Types\DeleteAdvancedQRQGroupResponse
    {
        $response = ($this->caller)('DeleteAdvancedQRQGroup', $parameters);

        \Psl\Type\instance_of(Types\DeleteAdvancedQRQGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetAnyData $parameters
     *
     * @return ResultInterface&Types\GetAnyDataResponse
     *
     * @throws SoapException
     */
    public function getAnyData(Types\GetAnyData $parameters): Types\GetAnyDataResponse
    {
        $response = ($this->caller)('GetAnyData', $parameters);

        \Psl\Type\instance_of(Types\GetAnyDataResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\LicenseGetComponent $parameters
     *
     * @return ResultInterface&Types\LicenseGetComponentResponse
     *
     * @throws SoapException
     */
    public function licenseGetComponent(Types\LicenseGetComponent $parameters): Types\LicenseGetComponentResponse
    {
        $response = ($this->caller)('LicenseGetComponent', $parameters);

        \Psl\Type\instance_of(Types\LicenseGetComponentResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\LicenseGetComponentInfo $parameters
     *
     * @return ResultInterface&Types\LicenseGetComponentInfoResponse
     *
     * @throws SoapException
     */
    public function licenseGetComponentInfo(Types\LicenseGetComponentInfo $parameters): Types\LicenseGetComponentInfoResponse
    {
        $response = ($this->caller)('LicenseGetComponentInfo', $parameters);

        \Psl\Type\instance_of(Types\LicenseGetComponentInfoResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\LicenseRegisterServer $parameters
     *
     * @return ResultInterface&Types\LicenseRegisterServerResponse
     *
     * @throws SoapException
     */
    public function licenseRegisterServer(Types\LicenseRegisterServer $parameters): Types\LicenseRegisterServerResponse
    {
        $response = ($this->caller)('LicenseRegisterServer', $parameters);

        \Psl\Type\instance_of(Types\LicenseRegisterServerResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\LicenseRegisterFeatureObject $parameters
     *
     * @return ResultInterface&Types\LicenseRegisterFeatureObjectResponse
     *
     * @throws SoapException
     */
    public function licenseRegisterFeatureObject(Types\LicenseRegisterFeatureObject $parameters): Types\LicenseRegisterFeatureObjectResponse
    {
        $response = ($this->caller)('LicenseRegisterFeatureObject', $parameters);

        \Psl\Type\instance_of(Types\LicenseRegisterFeatureObjectResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetVersion $parameters
     *
     * @return ResultInterface&Types\GetVersionResponse
     *
     * @throws SoapException
     */
    public function getVersion(Types\GetVersion $parameters): Types\GetVersionResponse
    {
        $response = ($this->caller)('GetVersion', $parameters);

        \Psl\Type\instance_of(Types\GetVersionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetLicenseDongleInfo $parameters
     *
     * @return ResultInterface&Types\GetLicenseDongleInfoResponse
     *
     * @throws SoapException
     */
    public function getLicenseDongleInfo(Types\GetLicenseDongleInfo $parameters): Types\GetLicenseDongleInfoResponse
    {
        $response = ($this->caller)('GetLicenseDongleInfo', $parameters);

        \Psl\Type\instance_of(Types\GetLicenseDongleInfoResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\OpenSession $parameters
     *
     * @return ResultInterface&Types\OpenSessionResponse
     *
     * @throws SoapException
     */
    public function openSession(Types\OpenSession $parameters): Types\OpenSessionResponse
    {
        $response = ($this->caller)('OpenSession', $parameters);

        \Psl\Type\instance_of(Types\OpenSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\OpenSessionWithInLocale $parameters
     *
     * @return ResultInterface&Types\OpenSessionWithInLocaleResponse
     *
     * @throws SoapException
     */
    public function openSessionWithInLocale(Types\OpenSessionWithInLocale $parameters): Types\OpenSessionWithInLocaleResponse
    {
        $response = ($this->caller)('OpenSessionWithInLocale', $parameters);

        \Psl\Type\instance_of(Types\OpenSessionWithInLocaleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\ContinueSession $parameters
     *
     * @return ResultInterface&Types\ContinueSessionResponse
     *
     * @throws SoapException
     */
    public function continueSession(Types\ContinueSession $parameters): Types\ContinueSessionResponse
    {
        $response = ($this->caller)('ContinueSession', $parameters);

        \Psl\Type\instance_of(Types\ContinueSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CloseSession $parameters
     *
     * @return ResultInterface&Types\CloseSessionResponse
     *
     * @throws SoapException
     */
    public function closeSession(Types\CloseSession $parameters): Types\CloseSessionResponse
    {
        $response = ($this->caller)('CloseSession', $parameters);

        \Psl\Type\instance_of(Types\CloseSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnit $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitResponse
     *
     * @throws SoapException
     */
    public function getOrgUnit(Types\GetOrgUnit $parameters): Types\GetOrgUnitResponse
    {
        $response = ($this->caller)('GetOrgUnit', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitSubItems $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitSubItemsResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitSubItems(Types\GetOrgUnitSubItems $parameters): Types\GetOrgUnitSubItemsResponse
    {
        $response = ($this->caller)('GetOrgUnitSubItems', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitSubItemsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitsHierarhy $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitsHierarhyResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitsHierarhy(Types\GetOrgUnitsHierarhy $parameters): Types\GetOrgUnitsHierarhyResponse
    {
        $response = ($this->caller)('GetOrgUnitsHierarhy', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitsHierarhyResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitsHierarhyWithPersons $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitsHierarhyWithPersonsResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitsHierarhyWithPersons(Types\GetOrgUnitsHierarhyWithPersons $parameters): Types\GetOrgUnitsHierarhyWithPersonsResponse
    {
        $response = ($this->caller)('GetOrgUnitsHierarhyWithPersons', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitsHierarhyWithPersonsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitsHierarhyWithVisitors $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitsHierarhyWithVisitorsResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitsHierarhyWithVisitors(Types\GetOrgUnitsHierarhyWithVisitors $parameters): Types\GetOrgUnitsHierarhyWithVisitorsResponse
    {
        $response = ($this->caller)('GetOrgUnitsHierarhyWithVisitors', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitsHierarhyWithVisitorsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitsHierarhyWithVehicle $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitsHierarhyWithVehicleResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitsHierarhyWithVehicle(Types\GetOrgUnitsHierarhyWithVehicle $parameters): Types\GetOrgUnitsHierarhyWithVehicleResponse
    {
        $response = ($this->caller)('GetOrgUnitsHierarhyWithVehicle', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitsHierarhyWithVehicleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitSubItemsHierarhyWithPersons $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitSubItemsHierarhyWithPersonsResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitSubItemsHierarhyWithPersons(Types\GetOrgUnitSubItemsHierarhyWithPersons $parameters): Types\GetOrgUnitSubItemsHierarhyWithPersonsResponse
    {
        $response = ($this->caller)('GetOrgUnitSubItemsHierarhyWithPersons', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitSubItemsHierarhyWithPersonsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitSubItemsHierarhyWithVisitors $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitSubItemsHierarhyWithVisitorsResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitSubItemsHierarhyWithVisitors(Types\GetOrgUnitSubItemsHierarhyWithVisitors $parameters): Types\GetOrgUnitSubItemsHierarhyWithVisitorsResponse
    {
        $response = ($this->caller)('GetOrgUnitSubItemsHierarhyWithVisitors', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitSubItemsHierarhyWithVisitorsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetOrgUnitSubItemsHierarhyWithVehicle $parameters
     *
     * @return ResultInterface&Types\GetOrgUnitSubItemsHierarhyWithVehicleResponse
     *
     * @throws SoapException
     */
    public function getOrgUnitSubItemsHierarhyWithVehicle(Types\GetOrgUnitSubItemsHierarhyWithVehicle $parameters): Types\GetOrgUnitSubItemsHierarhyWithVehicleResponse
    {
        $response = ($this->caller)('GetOrgUnitSubItemsHierarhyWithVehicle', $parameters);

        \Psl\Type\instance_of(Types\GetOrgUnitSubItemsHierarhyWithVehicleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPerson $parameters
     *
     * @return ResultInterface&Types\GetPersonResponse
     *
     * @throws SoapException
     */
    public function getPerson(Types\GetPerson $parameters): Types\GetPersonResponse
    {
        $response = ($this->caller)('GetPerson', $parameters);

        \Psl\Type\instance_of(Types\GetPersonResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonIdentifiers $parameters
     *
     * @return ResultInterface&Types\GetPersonIdentifiersResponse
     *
     * @throws SoapException
     */
    public function getPersonIdentifiers(Types\GetPersonIdentifiers $parameters): Types\GetPersonIdentifiersResponse
    {
        $response = ($this->caller)('GetPersonIdentifiers', $parameters);

        \Psl\Type\instance_of(Types\GetPersonIdentifiersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreatePerson $parameters
     *
     * @return ResultInterface&Types\CreatePersonResponse
     *
     * @throws SoapException
     */
    public function createPerson(Types\CreatePerson $parameters): Types\CreatePersonResponse
    {
        $response = ($this->caller)('CreatePerson', $parameters);

        \Psl\Type\instance_of(Types\CreatePersonResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateVisitor $parameters
     *
     * @return ResultInterface&Types\CreateVisitorResponse
     *
     * @throws SoapException
     */
    public function createVisitor(Types\CreateVisitor $parameters): Types\CreateVisitorResponse
    {
        $response = ($this->caller)('CreateVisitor', $parameters);

        \Psl\Type\instance_of(Types\CreateVisitorResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateVehicle $parameters
     *
     * @return ResultInterface&Types\CreateVehicleResponse
     *
     * @throws SoapException
     */
    public function createVehicle(Types\CreateVehicle $parameters): Types\CreateVehicleResponse
    {
        $response = ($this->caller)('CreateVehicle', $parameters);

        \Psl\Type\instance_of(Types\CreateVehicleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\OpenPersonEditingSession $parameters
     *
     * @return ResultInterface&Types\OpenPersonEditingSessionResponse
     *
     * @throws SoapException
     */
    public function openPersonEditingSession(Types\OpenPersonEditingSession $parameters): Types\OpenPersonEditingSessionResponse
    {
        $response = ($this->caller)('OpenPersonEditingSession', $parameters);

        \Psl\Type\instance_of(Types\OpenPersonEditingSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\ClosePersonEditingSession $parameters
     *
     * @return ResultInterface&Types\ClosePersonEditingSessionResponse
     *
     * @throws SoapException
     */
    public function closePersonEditingSession(Types\ClosePersonEditingSession $parameters): Types\ClosePersonEditingSessionResponse
    {
        $response = ($this->caller)('ClosePersonEditingSession', $parameters);

        \Psl\Type\instance_of(Types\ClosePersonEditingSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SavePerson $parameters
     *
     * @return ResultInterface&Types\SavePersonResponse
     *
     * @throws SoapException
     */
    public function savePerson(Types\SavePerson $parameters): Types\SavePersonResponse
    {
        $response = ($this->caller)('SavePerson', $parameters);

        \Psl\Type\instance_of(Types\SavePersonResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetPersonPhoto $parameters
     *
     * @return ResultInterface&Types\SetPersonPhotoResponse
     *
     * @throws SoapException
     */
    public function setPersonPhoto(Types\SetPersonPhoto $parameters): Types\SetPersonPhotoResponse
    {
        $response = ($this->caller)('SetPersonPhoto', $parameters);

        \Psl\Type\instance_of(Types\SetPersonPhotoResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetPersonOrgUnit $parameters
     *
     * @return ResultInterface&Types\SetPersonOrgUnitResponse
     *
     * @throws SoapException
     */
    public function setPersonOrgUnit(Types\SetPersonOrgUnit $parameters): Types\SetPersonOrgUnitResponse
    {
        $response = ($this->caller)('SetPersonOrgUnit', $parameters);

        \Psl\Type\instance_of(Types\SetPersonOrgUnitResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeletePerson $parameters
     *
     * @return ResultInterface&Types\DeletePersonResponse
     *
     * @throws SoapException
     */
    public function deletePerson(Types\DeletePerson $parameters): Types\DeletePersonResponse
    {
        $response = ($this->caller)('DeletePerson', $parameters);

        \Psl\Type\instance_of(Types\DeletePersonResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateOrgUnit $parameters
     *
     * @return ResultInterface&Types\CreateOrgUnitResponse
     *
     * @throws SoapException
     */
    public function createOrgUnit(Types\CreateOrgUnit $parameters): Types\CreateOrgUnitResponse
    {
        $response = ($this->caller)('CreateOrgUnit', $parameters);

        \Psl\Type\instance_of(Types\CreateOrgUnitResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\OpenOrgUnitEditingSession $parameters
     *
     * @return ResultInterface&Types\OpenOrgUnitEditingSessionResponse
     *
     * @throws SoapException
     */
    public function openOrgUnitEditingSession(Types\OpenOrgUnitEditingSession $parameters): Types\OpenOrgUnitEditingSessionResponse
    {
        $response = ($this->caller)('OpenOrgUnitEditingSession', $parameters);

        \Psl\Type\instance_of(Types\OpenOrgUnitEditingSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CloseOrgUnitEditingSession $parameters
     *
     * @return ResultInterface&Types\CloseOrgUnitEditingSessionResponse
     *
     * @throws SoapException
     */
    public function closeOrgUnitEditingSession(Types\CloseOrgUnitEditingSession $parameters): Types\CloseOrgUnitEditingSessionResponse
    {
        $response = ($this->caller)('CloseOrgUnitEditingSession', $parameters);

        \Psl\Type\instance_of(Types\CloseOrgUnitEditingSessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SaveOrgUnit $parameters
     *
     * @return ResultInterface&Types\SaveOrgUnitResponse
     *
     * @throws SoapException
     */
    public function saveOrgUnit(Types\SaveOrgUnit $parameters): Types\SaveOrgUnitResponse
    {
        $response = ($this->caller)('SaveOrgUnit', $parameters);

        \Psl\Type\instance_of(Types\SaveOrgUnitResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteOrgUnit $parameters
     *
     * @return ResultInterface&Types\DeleteOrgUnitResponse
     *
     * @throws SoapException
     */
    public function deleteOrgUnit(Types\DeleteOrgUnit $parameters): Types\DeleteOrgUnitResponse
    {
        $response = ($this->caller)('DeleteOrgUnit', $parameters);

        \Psl\Type\instance_of(Types\DeleteOrgUnitResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteIdentifier $parameters
     *
     * @return ResultInterface&Types\DeleteIdentifierResponse
     *
     * @throws SoapException
     */
    public function deleteIdentifier(Types\DeleteIdentifier $parameters): Types\DeleteIdentifierResponse
    {
        $response = ($this->caller)('DeleteIdentifier', $parameters);

        \Psl\Type\instance_of(Types\DeleteIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetIdentifierPrivileges $parameters
     *
     * @return ResultInterface&Types\SetIdentifierPrivilegesResponse
     *
     * @throws SoapException
     */
    public function setIdentifierPrivileges(Types\SetIdentifierPrivileges $parameters): Types\SetIdentifierPrivilegesResponse
    {
        $response = ($this->caller)('SetIdentifierPrivileges', $parameters);

        \Psl\Type\instance_of(Types\SetIdentifierPrivilegesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\AddPersonIdentifier $parameters
     *
     * @return ResultInterface&Types\AddPersonIdentifierResponse
     *
     * @throws SoapException
     */
    public function addPersonIdentifier(Types\AddPersonIdentifier $parameters): Types\AddPersonIdentifierResponse
    {
        $response = ($this->caller)('AddPersonIdentifier', $parameters);

        \Psl\Type\instance_of(Types\AddPersonIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\ChangePersonIdentifier $parameters
     *
     * @return ResultInterface&Types\ChangePersonIdentifierResponse
     *
     * @throws SoapException
     */
    public function changePersonIdentifier(Types\ChangePersonIdentifier $parameters): Types\ChangePersonIdentifierResponse
    {
        $response = ($this->caller)('ChangePersonIdentifier', $parameters);

        \Psl\Type\instance_of(Types\ChangePersonIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetTerritoriesHierarhy $parameters
     *
     * @return ResultInterface&Types\GetTerritoriesHierarhyResponse
     *
     * @throws SoapException
     */
    public function getTerritoriesHierarhy(Types\GetTerritoriesHierarhy $parameters): Types\GetTerritoriesHierarhyResponse
    {
        $response = ($this->caller)('GetTerritoriesHierarhy', $parameters);

        \Psl\Type\instance_of(Types\GetTerritoriesHierarhyResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetTerritorySubItems $parameters
     *
     * @return ResultInterface&Types\GetTerritorySubItemsResponse
     *
     * @throws SoapException
     */
    public function getTerritorySubItems(Types\GetTerritorySubItems $parameters): Types\GetTerritorySubItemsResponse
    {
        $response = ($this->caller)('GetTerritorySubItems', $parameters);

        \Psl\Type\instance_of(Types\GetTerritorySubItemsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetEvents $parameters
     *
     * @return ResultInterface&Types\GetEventsResponse
     *
     * @throws SoapException
     */
    public function getEvents(Types\GetEvents $parameters): Types\GetEventsResponse
    {
        $response = ($this->caller)('GetEvents', $parameters);

        \Psl\Type\instance_of(Types\GetEventsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonExtraFieldTemplates $parameters
     *
     * @return ResultInterface&Types\GetPersonExtraFieldTemplatesResponse
     *
     * @throws SoapException
     */
    public function getPersonExtraFieldTemplates(Types\GetPersonExtraFieldTemplates $parameters): Types\GetPersonExtraFieldTemplatesResponse
    {
        $response = ($this->caller)('GetPersonExtraFieldTemplates', $parameters);

        \Psl\Type\instance_of(Types\GetPersonExtraFieldTemplatesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetVisitorExtraFieldTemplates $parameters
     *
     * @return ResultInterface&Types\GetVisitorExtraFieldTemplatesResponse
     *
     * @throws SoapException
     */
    public function getVisitorExtraFieldTemplates(Types\GetVisitorExtraFieldTemplates $parameters): Types\GetVisitorExtraFieldTemplatesResponse
    {
        $response = ($this->caller)('GetVisitorExtraFieldTemplates', $parameters);

        \Psl\Type\instance_of(Types\GetVisitorExtraFieldTemplatesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetVehicleExtraFieldTemplates $parameters
     *
     * @return ResultInterface&Types\GetVehicleExtraFieldTemplatesResponse
     *
     * @throws SoapException
     */
    public function getVehicleExtraFieldTemplates(Types\GetVehicleExtraFieldTemplates $parameters): Types\GetVehicleExtraFieldTemplatesResponse
    {
        $response = ($this->caller)('GetVehicleExtraFieldTemplates', $parameters);

        \Psl\Type\instance_of(Types\GetVehicleExtraFieldTemplatesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonExtraFieldValue $parameters
     *
     * @return ResultInterface&Types\GetPersonExtraFieldValueResponse
     *
     * @throws SoapException
     */
    public function getPersonExtraFieldValue(Types\GetPersonExtraFieldValue $parameters): Types\GetPersonExtraFieldValueResponse
    {
        $response = ($this->caller)('GetPersonExtraFieldValue', $parameters);

        \Psl\Type\instance_of(Types\GetPersonExtraFieldValueResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonExtraFieldValueString $parameters
     *
     * @return ResultInterface&Types\GetPersonExtraFieldValueStringResponse
     *
     * @throws SoapException
     */
    public function getPersonExtraFieldValueString(Types\GetPersonExtraFieldValueString $parameters): Types\GetPersonExtraFieldValueStringResponse
    {
        $response = ($this->caller)('GetPersonExtraFieldValueString', $parameters);

        \Psl\Type\instance_of(Types\GetPersonExtraFieldValueStringResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetPersonExtraFieldValue $parameters
     *
     * @return ResultInterface&Types\SetPersonExtraFieldValueResponse
     *
     * @throws SoapException
     */
    public function setPersonExtraFieldValue(Types\SetPersonExtraFieldValue $parameters): Types\SetPersonExtraFieldValueResponse
    {
        $response = ($this->caller)('SetPersonExtraFieldValue', $parameters);

        \Psl\Type\instance_of(Types\SetPersonExtraFieldValueResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonExtraFieldValues $parameters
     *
     * @return ResultInterface&Types\GetPersonExtraFieldValuesResponse
     *
     * @throws SoapException
     */
    public function getPersonExtraFieldValues(Types\GetPersonExtraFieldValues $parameters): Types\GetPersonExtraFieldValuesResponse
    {
        $response = ($this->caller)('GetPersonExtraFieldValues', $parameters);

        \Psl\Type\instance_of(Types\GetPersonExtraFieldValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetPersonExtraFieldValues $parameters
     *
     * @return ResultInterface&Types\SetPersonExtraFieldValuesResponse
     *
     * @throws SoapException
     */
    public function setPersonExtraFieldValues(Types\SetPersonExtraFieldValues $parameters): Types\SetPersonExtraFieldValuesResponse
    {
        $response = ($this->caller)('SetPersonExtraFieldValues', $parameters);

        \Psl\Type\instance_of(Types\SetPersonExtraFieldValuesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\ValidateExtraFieldValue $parameters
     *
     * @return ResultInterface&Types\ValidateExtraFieldValueResponse
     *
     * @throws SoapException
     */
    public function validateExtraFieldValue(Types\ValidateExtraFieldValue $parameters): Types\ValidateExtraFieldValueResponse
    {
        $response = ($this->caller)('ValidateExtraFieldValue', $parameters);

        \Psl\Type\instance_of(Types\ValidateExtraFieldValueResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\FindVisitorRequest $parameters
     *
     * @return ResultInterface&Types\FindVisitorRequestResponse
     *
     * @throws SoapException
     */
    public function findVisitorRequest(Types\FindVisitorRequest $parameters): Types\FindVisitorRequestResponse
    {
        $response = ($this->caller)('FindVisitorRequest', $parameters);

        \Psl\Type\instance_of(Types\FindVisitorRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetAcceptedVisitorRequests $parameters
     *
     * @return ResultInterface&Types\GetAcceptedVisitorRequestsResponse
     *
     * @throws SoapException
     */
    public function getAcceptedVisitorRequests(Types\GetAcceptedVisitorRequests $parameters): Types\GetAcceptedVisitorRequestsResponse
    {
        $response = ($this->caller)('GetAcceptedVisitorRequests', $parameters);

        \Psl\Type\instance_of(Types\GetAcceptedVisitorRequestsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonVisitorRequests $parameters
     *
     * @return ResultInterface&Types\GetPersonVisitorRequestsResponse
     *
     * @throws SoapException
     */
    public function getPersonVisitorRequests(Types\GetPersonVisitorRequests $parameters): Types\GetPersonVisitorRequestsResponse
    {
        $response = ($this->caller)('GetPersonVisitorRequests', $parameters);

        \Psl\Type\instance_of(Types\GetPersonVisitorRequestsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\ActivateVisitorRequest $parameters
     *
     * @return ResultInterface&Types\ActivateVisitorRequestResponse
     *
     * @throws SoapException
     */
    public function activateVisitorRequest(Types\ActivateVisitorRequest $parameters): Types\ActivateVisitorRequestResponse
    {
        $response = ($this->caller)('ActivateVisitorRequest', $parameters);

        \Psl\Type\instance_of(Types\ActivateVisitorRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CloseVisitorRequest $parameters
     *
     * @return ResultInterface&Types\CloseVisitorRequestResponse
     *
     * @throws SoapException
     */
    public function closeVisitorRequest(Types\CloseVisitorRequest $parameters): Types\CloseVisitorRequestResponse
    {
        $response = ($this->caller)('CloseVisitorRequest', $parameters);

        \Psl\Type\instance_of(Types\CloseVisitorRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CloseAllActiveVisitorRequests $parameters
     *
     * @return ResultInterface&Types\CloseAllActiveVisitorRequestsResponse
     *
     * @throws SoapException
     */
    public function closeAllActiveVisitorRequests(Types\CloseAllActiveVisitorRequests $parameters): Types\CloseAllActiveVisitorRequestsResponse
    {
        $response = ($this->caller)('CloseAllActiveVisitorRequests', $parameters);

        \Psl\Type\instance_of(Types\CloseAllActiveVisitorRequestsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonsChangedAfter $parameters
     *
     * @return ResultInterface&Types\GetPersonsChangedAfterResponse
     *
     * @throws SoapException
     */
    public function getPersonsChangedAfter(Types\GetPersonsChangedAfter $parameters): Types\GetPersonsChangedAfterResponse
    {
        $response = ($this->caller)('GetPersonsChangedAfter', $parameters);

        \Psl\Type\instance_of(Types\GetPersonsChangedAfterResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonsDeletedAfter $parameters
     *
     * @return ResultInterface&Types\GetPersonsDeletedAfterResponse
     *
     * @throws SoapException
     */
    public function getPersonsDeletedAfter(Types\GetPersonsDeletedAfter $parameters): Types\GetPersonsDeletedAfterResponse
    {
        $response = ($this->caller)('GetPersonsDeletedAfter', $parameters);

        \Psl\Type\instance_of(Types\GetPersonsDeletedAfterResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\FindPeople $parameters
     *
     * @return ResultInterface&Types\FindPeopleResponse
     *
     * @throws SoapException
     */
    public function findPeople(Types\FindPeople $parameters): Types\FindPeopleResponse
    {
        $response = ($this->caller)('FindPeople', $parameters);

        \Psl\Type\instance_of(Types\FindPeopleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\FindVisitors $parameters
     *
     * @return ResultInterface&Types\FindVisitorsResponse
     *
     * @throws SoapException
     */
    public function findVisitors(Types\FindVisitors $parameters): Types\FindVisitorsResponse
    {
        $response = ($this->caller)('FindVisitors', $parameters);

        \Psl\Type\instance_of(Types\FindVisitorsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\FindVehicle $parameters
     *
     * @return ResultInterface&Types\FindVehicleResponse
     *
     * @throws SoapException
     */
    public function findVehicle(Types\FindVehicle $parameters): Types\FindVehicleResponse
    {
        $response = ($this->caller)('FindVehicle', $parameters);

        \Psl\Type\instance_of(Types\FindVehicleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\FindInBlackList $parameters
     *
     * @return ResultInterface&Types\FindInBlackListResponse
     *
     * @throws SoapException
     */
    public function findInBlackList(Types\FindInBlackList $parameters): Types\FindInBlackListResponse
    {
        $response = ($this->caller)('FindInBlackList', $parameters);

        \Psl\Type\instance_of(Types\FindInBlackListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetBlackList $parameters
     *
     * @return ResultInterface&Types\GetBlackListResponse
     *
     * @throws SoapException
     */
    public function getBlackList(Types\GetBlackList $parameters): Types\GetBlackListResponse
    {
        $response = ($this->caller)('GetBlackList', $parameters);

        \Psl\Type\instance_of(Types\GetBlackListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\AddToBlackList $parameters
     *
     * @return ResultInterface&Types\AddToBlackListResponse
     *
     * @throws SoapException
     */
    public function addToBlackList(Types\AddToBlackList $parameters): Types\AddToBlackListResponse
    {
        $response = ($this->caller)('AddToBlackList', $parameters);

        \Psl\Type\instance_of(Types\AddToBlackListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\RemoveFromBlackList $parameters
     *
     * @return ResultInterface&Types\RemoveFromBlackListResponse
     *
     * @throws SoapException
     */
    public function removeFromBlackList(Types\RemoveFromBlackList $parameters): Types\RemoveFromBlackListResponse
    {
        $response = ($this->caller)('RemoveFromBlackList', $parameters);

        \Psl\Type\instance_of(Types\RemoveFromBlackListResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetAccessSchedules $parameters
     *
     * @return ResultInterface&Types\GetAccessSchedulesResponse
     *
     * @throws SoapException
     */
    public function getAccessSchedules(Types\GetAccessSchedules $parameters): Types\GetAccessSchedulesResponse
    {
        $response = ($this->caller)('GetAccessSchedules', $parameters);

        \Psl\Type\instance_of(Types\GetAccessSchedulesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetWorktimeSchedules $parameters
     *
     * @return ResultInterface&Types\GetWorktimeSchedulesResponse
     *
     * @throws SoapException
     */
    public function getWorktimeSchedules(Types\GetWorktimeSchedules $parameters): Types\GetWorktimeSchedulesResponse
    {
        $response = ($this->caller)('GetWorktimeSchedules', $parameters);

        \Psl\Type\instance_of(Types\GetWorktimeSchedulesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetScheduleIntervals $parameters
     *
     * @return ResultInterface&Types\GetScheduleIntervalsResponse
     *
     * @throws SoapException
     */
    public function getScheduleIntervals(Types\GetScheduleIntervals $parameters): Types\GetScheduleIntervalsResponse
    {
        $response = ($this->caller)('GetScheduleIntervals', $parameters);

        \Psl\Type\instance_of(Types\GetScheduleIntervalsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateAccessSchedule $parameters
     *
     * @return ResultInterface&Types\CreateAccessScheduleResponse
     *
     * @throws SoapException
     */
    public function createAccessSchedule(Types\CreateAccessSchedule $parameters): Types\CreateAccessScheduleResponse
    {
        $response = ($this->caller)('CreateAccessSchedule', $parameters);

        \Psl\Type\instance_of(Types\CreateAccessScheduleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateWorktimeSchedule $parameters
     *
     * @return ResultInterface&Types\CreateWorktimeScheduleResponse
     *
     * @throws SoapException
     */
    public function createWorktimeSchedule(Types\CreateWorktimeSchedule $parameters): Types\CreateWorktimeScheduleResponse
    {
        $response = ($this->caller)('CreateWorktimeSchedule', $parameters);

        \Psl\Type\instance_of(Types\CreateWorktimeScheduleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetSchedule $parameters
     *
     * @return ResultInterface&Types\GetScheduleResponse
     *
     * @throws SoapException
     */
    public function getSchedule(Types\GetSchedule $parameters): Types\GetScheduleResponse
    {
        $response = ($this->caller)('GetSchedule', $parameters);

        \Psl\Type\instance_of(Types\GetScheduleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SaveSchedule $parameters
     *
     * @return ResultInterface&Types\SaveScheduleResponse
     *
     * @throws SoapException
     */
    public function saveSchedule(Types\SaveSchedule $parameters): Types\SaveScheduleResponse
    {
        $response = ($this->caller)('SaveSchedule', $parameters);

        \Psl\Type\instance_of(Types\SaveScheduleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteSchedule $parameters
     *
     * @return ResultInterface&Types\DeleteScheduleResponse
     *
     * @throws SoapException
     */
    public function deleteSchedule(Types\DeleteSchedule $parameters): Types\DeleteScheduleResponse
    {
        $response = ($this->caller)('DeleteSchedule', $parameters);

        \Psl\Type\instance_of(Types\DeleteScheduleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetScheduleDetails $parameters
     *
     * @return ResultInterface&Types\GetScheduleDetailsResponse
     *
     * @throws SoapException
     */
    public function getScheduleDetails(Types\GetScheduleDetails $parameters): Types\GetScheduleDetailsResponse
    {
        $response = ($this->caller)('GetScheduleDetails', $parameters);

        \Psl\Type\instance_of(Types\GetScheduleDetailsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetScheduleDays $parameters
     *
     * @return ResultInterface&Types\SetScheduleDaysResponse
     *
     * @throws SoapException
     */
    public function setScheduleDays(Types\SetScheduleDays $parameters): Types\SetScheduleDaysResponse
    {
        $response = ($this->caller)('SetScheduleDays', $parameters);

        \Psl\Type\instance_of(Types\SetScheduleDaysResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetScheduleFix $parameters
     *
     * @return ResultInterface&Types\SetScheduleFixResponse
     *
     * @throws SoapException
     */
    public function setScheduleFix(Types\SetScheduleFix $parameters): Types\SetScheduleFixResponse
    {
        $response = ($this->caller)('SetScheduleFix', $parameters);

        \Psl\Type\instance_of(Types\SetScheduleFixResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteScheduleDays $parameters
     *
     * @return ResultInterface&Types\DeleteScheduleDaysResponse
     *
     * @throws SoapException
     */
    public function deleteScheduleDays(Types\DeleteScheduleDays $parameters): Types\DeleteScheduleDaysResponse
    {
        $response = ($this->caller)('DeleteScheduleDays', $parameters);

        \Psl\Type\instance_of(Types\DeleteScheduleDaysResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetHolidays $parameters
     *
     * @return ResultInterface&Types\GetHolidaysResponse
     *
     * @throws SoapException
     */
    public function getHolidays(Types\GetHolidays $parameters): Types\GetHolidaysResponse
    {
        $response = ($this->caller)('GetHolidays', $parameters);

        \Psl\Type\instance_of(Types\GetHolidaysResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetHolidays $parameters
     *
     * @return ResultInterface&Types\SetHolidaysResponse
     *
     * @throws SoapException
     */
    public function setHolidays(Types\SetHolidays $parameters): Types\SetHolidaysResponse
    {
        $response = ($this->caller)('SetHolidays', $parameters);

        \Psl\Type\instance_of(Types\SetHolidaysResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteHolidays $parameters
     *
     * @return ResultInterface&Types\DeleteHolidaysResponse
     *
     * @throws SoapException
     */
    public function deleteHolidays(Types\DeleteHolidays $parameters): Types\DeleteHolidaysResponse
    {
        $response = ($this->caller)('DeleteHolidays', $parameters);

        \Psl\Type\instance_of(Types\DeleteHolidaysResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetAccessGroups $parameters
     *
     * @return ResultInterface&Types\GetAccessGroupsResponse
     *
     * @throws SoapException
     */
    public function getAccessGroups(Types\GetAccessGroups $parameters): Types\GetAccessGroupsResponse
    {
        $response = ($this->caller)('GetAccessGroups', $parameters);

        \Psl\Type\instance_of(Types\GetAccessGroupsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateAccessGroup $parameters
     *
     * @return ResultInterface&Types\CreateAccessGroupResponse
     *
     * @throws SoapException
     */
    public function createAccessGroup(Types\CreateAccessGroup $parameters): Types\CreateAccessGroupResponse
    {
        $response = ($this->caller)('CreateAccessGroup', $parameters);

        \Psl\Type\instance_of(Types\CreateAccessGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateTempAccessGroup $parameters
     *
     * @return ResultInterface&Types\CreateTempAccessGroupResponse
     *
     * @throws SoapException
     */
    public function createTempAccessGroup(Types\CreateTempAccessGroup $parameters): Types\CreateTempAccessGroupResponse
    {
        $response = ($this->caller)('CreateTempAccessGroup', $parameters);

        \Psl\Type\instance_of(Types\CreateTempAccessGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateVehicleAccessGroup $parameters
     *
     * @return ResultInterface&Types\CreateVehicleAccessGroupResponse
     *
     * @throws SoapException
     */
    public function createVehicleAccessGroup(Types\CreateVehicleAccessGroup $parameters): Types\CreateVehicleAccessGroupResponse
    {
        $response = ($this->caller)('CreateVehicleAccessGroup', $parameters);

        \Psl\Type\instance_of(Types\CreateVehicleAccessGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateVehicleTempAccessGroup $parameters
     *
     * @return ResultInterface&Types\CreateVehicleTempAccessGroupResponse
     *
     * @throws SoapException
     */
    public function createVehicleTempAccessGroup(Types\CreateVehicleTempAccessGroup $parameters): Types\CreateVehicleTempAccessGroupResponse
    {
        $response = ($this->caller)('CreateVehicleTempAccessGroup', $parameters);

        \Psl\Type\instance_of(Types\CreateVehicleTempAccessGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteAccessGroup $parameters
     *
     * @return ResultInterface&Types\DeleteAccessGroupResponse
     *
     * @throws SoapException
     */
    public function deleteAccessGroup(Types\DeleteAccessGroup $parameters): Types\DeleteAccessGroupResponse
    {
        $response = ($this->caller)('DeleteAccessGroup', $parameters);

        \Psl\Type\instance_of(Types\DeleteAccessGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetSubAccessGroups $parameters
     *
     * @return ResultInterface&Types\GetSubAccessGroupsResponse
     *
     * @throws SoapException
     */
    public function getSubAccessGroups(Types\GetSubAccessGroups $parameters): Types\GetSubAccessGroupsResponse
    {
        $response = ($this->caller)('GetSubAccessGroups', $parameters);

        \Psl\Type\instance_of(Types\GetSubAccessGroupsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\AddSubAccessGroup $parameters
     *
     * @return ResultInterface&Types\AddSubAccessGroupResponse
     *
     * @throws SoapException
     */
    public function addSubAccessGroup(Types\AddSubAccessGroup $parameters): Types\AddSubAccessGroupResponse
    {
        $response = ($this->caller)('AddSubAccessGroup', $parameters);

        \Psl\Type\instance_of(Types\AddSubAccessGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteSubAccessGroup $parameters
     *
     * @return ResultInterface&Types\DeleteSubAccessGroupResponse
     *
     * @throws SoapException
     */
    public function deleteSubAccessGroup(Types\DeleteSubAccessGroup $parameters): Types\DeleteSubAccessGroupResponse
    {
        $response = ($this->caller)('DeleteSubAccessGroup', $parameters);

        \Psl\Type\instance_of(Types\DeleteSubAccessGroupResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetInheritedAccessGroups $parameters
     *
     * @return ResultInterface&Types\GetInheritedAccessGroupsResponse
     *
     * @throws SoapException
     */
    public function getInheritedAccessGroups(Types\GetInheritedAccessGroups $parameters): Types\GetInheritedAccessGroupsResponse
    {
        $response = ($this->caller)('GetInheritedAccessGroups', $parameters);

        \Psl\Type\instance_of(Types\GetInheritedAccessGroupsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SetInheritedAccessGroups $parameters
     *
     * @return ResultInterface&Types\SetInheritedAccessGroupsResponse
     *
     * @throws SoapException
     */
    public function setInheritedAccessGroups(Types\SetInheritedAccessGroups $parameters): Types\SetInheritedAccessGroupsResponse
    {
        $response = ($this->caller)('SetInheritedAccessGroups', $parameters);

        \Psl\Type\instance_of(Types\SetInheritedAccessGroupsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetRootTerritory $parameters
     *
     * @return ResultInterface&Types\GetRootTerritoryResponse
     *
     * @throws SoapException
     */
    public function getRootTerritory(Types\GetRootTerritory $parameters): Types\GetRootTerritoryResponse
    {
        $response = ($this->caller)('GetRootTerritory', $parameters);

        \Psl\Type\instance_of(Types\GetRootTerritoryResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetTerritory $parameters
     *
     * @return ResultInterface&Types\GetTerritoryResponse
     *
     * @throws SoapException
     */
    public function getTerritory(Types\GetTerritory $parameters): Types\GetTerritoryResponse
    {
        $response = ($this->caller)('GetTerritory', $parameters);

        \Psl\Type\instance_of(Types\GetTerritoryResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetRootOrgUnit $parameters
     *
     * @return ResultInterface&Types\GetRootOrgUnitResponse
     *
     * @throws SoapException
     */
    public function getRootOrgUnit(Types\GetRootOrgUnit $parameters): Types\GetRootOrgUnitResponse
    {
        $response = ($this->caller)('GetRootOrgUnit', $parameters);

        \Psl\Type\instance_of(Types\GetRootOrgUnitResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetDomains $parameters
     *
     * @return ResultInterface&Types\GetDomainsResponse
     *
     * @throws SoapException
     */
    public function getDomains(Types\GetDomains $parameters): Types\GetDomainsResponse
    {
        $response = ($this->caller)('GetDomains', $parameters);

        \Psl\Type\instance_of(Types\GetDomainsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CreateVisitorRequest $parameters
     *
     * @return ResultInterface&Types\CreateVisitorRequestResponse
     *
     * @throws SoapException
     */
    public function createVisitorRequest(Types\CreateVisitorRequest $parameters): Types\CreateVisitorRequestResponse
    {
        $response = ($this->caller)('CreateVisitorRequest', $parameters);

        \Psl\Type\instance_of(Types\CreateVisitorRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteIssuedVisitorRequest $parameters
     *
     * @return ResultInterface&Types\DeleteIssuedVisitorRequestResponse
     *
     * @throws SoapException
     */
    public function deleteIssuedVisitorRequest(Types\DeleteIssuedVisitorRequest $parameters): Types\DeleteIssuedVisitorRequestResponse
    {
        $response = ($this->caller)('DeleteIssuedVisitorRequest', $parameters);

        \Psl\Type\instance_of(Types\DeleteIssuedVisitorRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetIssuedVisitorRequests $parameters
     *
     * @return ResultInterface&Types\GetIssuedVisitorRequestsResponse
     *
     * @throws SoapException
     */
    public function getIssuedVisitorRequests(Types\GetIssuedVisitorRequests $parameters): Types\GetIssuedVisitorRequestsResponse
    {
        $response = ($this->caller)('GetIssuedVisitorRequests', $parameters);

        \Psl\Type\instance_of(Types\GetIssuedVisitorRequestsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetVisitorRequests $parameters
     *
     * @return ResultInterface&Types\GetVisitorRequestsResponse
     *
     * @throws SoapException
     */
    public function getVisitorRequests(Types\GetVisitorRequests $parameters): Types\GetVisitorRequestsResponse
    {
        $response = ($this->caller)('GetVisitorRequests', $parameters);

        \Psl\Type\instance_of(Types\GetVisitorRequestsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetVisitorRequest $parameters
     *
     * @return ResultInterface&Types\GetVisitorRequestResponse
     *
     * @throws SoapException
     */
    public function getVisitorRequest(Types\GetVisitorRequest $parameters): Types\GetVisitorRequestResponse
    {
        $response = ($this->caller)('GetVisitorRequest', $parameters);

        \Psl\Type\instance_of(Types\GetVisitorRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetVisitorRequestWithAudit $parameters
     *
     * @return ResultInterface&Types\GetVisitorRequestWithAuditResponse
     *
     * @throws SoapException
     */
    public function getVisitorRequestWithAudit(Types\GetVisitorRequestWithAudit $parameters): Types\GetVisitorRequestWithAuditResponse
    {
        $response = ($this->caller)('GetVisitorRequestWithAudit', $parameters);

        \Psl\Type\instance_of(Types\GetVisitorRequestWithAuditResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SaveVisitorRequest $parameters
     *
     * @return ResultInterface&Types\SaveVisitorRequestResponse
     *
     * @throws SoapException
     */
    public function saveVisitorRequest(Types\SaveVisitorRequest $parameters): Types\SaveVisitorRequestResponse
    {
        $response = ($this->caller)('SaveVisitorRequest', $parameters);

        \Psl\Type\instance_of(Types\SaveVisitorRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\OpenEventHistorySession $parameters
     *
     * @return ResultInterface&Types\OpenEventHistorySessionResponse
     *
     * @throws SoapException
     */
    public function openEventHistorySession(Types\OpenEventHistorySession $parameters): Types\OpenEventHistorySessionResponse
    {
        $response = ($this->caller)('OpenEventHistorySession', $parameters);

        \Psl\Type\instance_of(Types\OpenEventHistorySessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CloseEventHistorySession $parameters
     *
     * @return ResultInterface&Types\CloseEventHistorySessionResponse
     *
     * @throws SoapException
     */
    public function closeEventHistorySession(Types\CloseEventHistorySession $parameters): Types\CloseEventHistorySessionResponse
    {
        $response = ($this->caller)('CloseEventHistorySession', $parameters);

        \Psl\Type\instance_of(Types\CloseEventHistorySessionResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetEventHistoryResultCount $parameters
     *
     * @return ResultInterface&Types\GetEventHistoryResultCountResponse
     *
     * @throws SoapException
     */
    public function getEventHistoryResultCount(Types\GetEventHistoryResultCount $parameters): Types\GetEventHistoryResultCountResponse
    {
        $response = ($this->caller)('GetEventHistoryResultCount', $parameters);

        \Psl\Type\instance_of(Types\GetEventHistoryResultCountResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetEventHistoryResult $parameters
     *
     * @return ResultInterface&Types\GetEventHistoryResultResponse
     *
     * @throws SoapException
     */
    public function getEventHistoryResult(Types\GetEventHistoryResult $parameters): Types\GetEventHistoryResultResponse
    {
        $response = ($this->caller)('GetEventHistoryResult', $parameters);

        \Psl\Type\instance_of(Types\GetEventHistoryResultResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\FindPersonByIdentifier $parameters
     *
     * @return ResultInterface&Types\FindPersonByIdentifierResponse
     *
     * @throws SoapException
     */
    public function findPersonByIdentifier(Types\FindPersonByIdentifier $parameters): Types\FindPersonByIdentifierResponse
    {
        $response = ($this->caller)('FindPersonByIdentifier', $parameters);

        \Psl\Type\instance_of(Types\FindPersonByIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\BlockPerson $parameters
     *
     * @return ResultInterface&Types\BlockPersonResponse
     *
     * @throws SoapException
     */
    public function blockPerson(Types\BlockPerson $parameters): Types\BlockPersonResponse
    {
        $response = ($this->caller)('BlockPerson', $parameters);

        \Psl\Type\instance_of(Types\BlockPersonResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\UnblockPerson $parameters
     *
     * @return ResultInterface&Types\UnblockPersonResponse
     *
     * @throws SoapException
     */
    public function unblockPerson(Types\UnblockPerson $parameters): Types\UnblockPersonResponse
    {
        $response = ($this->caller)('UnblockPerson', $parameters);

        \Psl\Type\instance_of(Types\UnblockPersonResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\CheckRole $parameters
     *
     * @return ResultInterface&Types\CheckRoleResponse
     *
     * @throws SoapException
     */
    public function checkRole(Types\CheckRole $parameters): Types\CheckRoleResponse
    {
        $response = ($this->caller)('CheckRole', $parameters);

        \Psl\Type\instance_of(Types\CheckRoleResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonScheduleFixes $parameters
     *
     * @return ResultInterface&Types\GetPersonScheduleFixesResponse
     *
     * @throws SoapException
     */
    public function getPersonScheduleFixes(Types\GetPersonScheduleFixes $parameters): Types\GetPersonScheduleFixesResponse
    {
        $response = ($this->caller)('GetPersonScheduleFixes', $parameters);

        \Psl\Type\instance_of(Types\GetPersonScheduleFixesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\AddPersonScheduleFix $parameters
     *
     * @return ResultInterface&Types\AddPersonScheduleFixResponse
     *
     * @throws SoapException
     */
    public function addPersonScheduleFix(Types\AddPersonScheduleFix $parameters): Types\AddPersonScheduleFixResponse
    {
        $response = ($this->caller)('AddPersonScheduleFix', $parameters);

        \Psl\Type\instance_of(Types\AddPersonScheduleFixResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SavePersonScheduleFix $parameters
     *
     * @return ResultInterface&Types\SavePersonScheduleFixResponse
     *
     * @throws SoapException
     */
    public function savePersonScheduleFix(Types\SavePersonScheduleFix $parameters): Types\SavePersonScheduleFixResponse
    {
        $response = ($this->caller)('SavePersonScheduleFix', $parameters);

        \Psl\Type\instance_of(Types\SavePersonScheduleFixResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeletePersonScheduleFix $parameters
     *
     * @return ResultInterface&Types\DeletePersonScheduleFixResponse
     *
     * @throws SoapException
     */
    public function deletePersonScheduleFix(Types\DeletePersonScheduleFix $parameters): Types\DeletePersonScheduleFixResponse
    {
        $response = ($this->caller)('DeletePersonScheduleFix', $parameters);

        \Psl\Type\instance_of(Types\DeletePersonScheduleFixResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SendHardwareCommand $parameters
     *
     * @return ResultInterface&Types\SendHardwareCommandResponse
     *
     * @throws SoapException
     */
    public function sendHardwareCommand(Types\SendHardwareCommand $parameters): Types\SendHardwareCommandResponse
    {
        $response = ($this->caller)('SendHardwareCommand', $parameters);

        \Psl\Type\instance_of(Types\SendHardwareCommandResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetHardwareState $parameters
     *
     * @return ResultInterface&Types\GetHardwareStateResponse
     *
     * @throws SoapException
     */
    public function getHardwareState(Types\GetHardwareState $parameters): Types\GetHardwareStateResponse
    {
        $response = ($this->caller)('GetHardwareState', $parameters);

        \Psl\Type\instance_of(Types\GetHardwareStateResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetHardwareEvents $parameters
     *
     * @return ResultInterface&Types\GetHardwareEventsResponse
     *
     * @throws SoapException
     */
    public function getHardwareEvents(Types\GetHardwareEvents $parameters): Types\GetHardwareEventsResponse
    {
        $response = ($this->caller)('GetHardwareEvents', $parameters);

        \Psl\Type\instance_of(Types\GetHardwareEventsResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetHardwareEventsResolved $parameters
     *
     * @return ResultInterface&Types\GetHardwareEventsResolvedResponse
     *
     * @throws SoapException
     */
    public function getHardwareEventsResolved(Types\GetHardwareEventsResolved $parameters): Types\GetHardwareEventsResolvedResponse
    {
        $response = ($this->caller)('GetHardwareEventsResolved', $parameters);

        \Psl\Type\instance_of(Types\GetHardwareEventsResolvedResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\AddBioIdentifier $parameters
     *
     * @return ResultInterface&Types\AddBioIdentifierResponse
     *
     * @throws SoapException
     */
    public function addBioIdentifier(Types\AddBioIdentifier $parameters): Types\AddBioIdentifierResponse
    {
        $response = ($this->caller)('AddBioIdentifier', $parameters);

        \Psl\Type\instance_of(Types\AddBioIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\SaveBioIdentifier $parameters
     *
     * @return ResultInterface&Types\SaveBioIdentifierResponse
     *
     * @throws SoapException
     */
    public function saveBioIdentifier(Types\SaveBioIdentifier $parameters): Types\SaveBioIdentifierResponse
    {
        $response = ($this->caller)('SaveBioIdentifier', $parameters);

        \Psl\Type\instance_of(Types\SaveBioIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeleteBioIdentifier $parameters
     *
     * @return ResultInterface&Types\DeleteBioIdentifierResponse
     *
     * @throws SoapException
     */
    public function deleteBioIdentifier(Types\DeleteBioIdentifier $parameters): Types\DeleteBioIdentifierResponse
    {
        $response = ($this->caller)('DeleteBioIdentifier', $parameters);

        \Psl\Type\instance_of(Types\DeleteBioIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\DeletePersonBioIdentifier $parameters
     *
     * @return ResultInterface&Types\DeletePersonBioIdentifierResponse
     *
     * @throws SoapException
     */
    public function deletePersonBioIdentifier(Types\DeletePersonBioIdentifier $parameters): Types\DeletePersonBioIdentifierResponse
    {
        $response = ($this->caller)('DeletePersonBioIdentifier', $parameters);

        \Psl\Type\instance_of(Types\DeletePersonBioIdentifierResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPersonBioIdentifiers $parameters
     *
     * @return ResultInterface&Types\GetPersonBioIdentifiersResponse
     *
     * @throws SoapException
     */
    public function getPersonBioIdentifiers(Types\GetPersonBioIdentifiers $parameters): Types\GetPersonBioIdentifiersResponse
    {
        $response = ($this->caller)('GetPersonBioIdentifiers', $parameters);

        \Psl\Type\instance_of(Types\GetPersonBioIdentifiersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetAllBioIdentifiers $parameters
     *
     * @return ResultInterface&Types\GetAllBioIdentifiersResponse
     *
     * @throws SoapException
     */
    public function getAllBioIdentifiers(Types\GetAllBioIdentifiers $parameters): Types\GetAllBioIdentifiersResponse
    {
        $response = ($this->caller)('GetAllBioIdentifiers', $parameters);

        \Psl\Type\instance_of(Types\GetAllBioIdentifiersResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\EventsSubscribe $parameters
     *
     * @return ResultInterface&Types\EventsSubscribeResponse
     *
     * @throws SoapException
     */
    public function eventsSubscribe(Types\EventsSubscribe $parameters): Types\EventsSubscribeResponse
    {
        $response = ($this->caller)('EventsSubscribe', $parameters);

        \Psl\Type\instance_of(Types\EventsSubscribeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\EventsUnsubscribe $parameters
     *
     * @return ResultInterface&Types\EventsUnsubscribeResponse
     *
     * @throws SoapException
     */
    public function eventsUnsubscribe(Types\EventsUnsubscribe $parameters): Types\EventsUnsubscribeResponse
    {
        $response = ($this->caller)('EventsUnsubscribe', $parameters);

        \Psl\Type\instance_of(Types\EventsUnsubscribeResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\EventsSubscribeCheck $parameters
     *
     * @return ResultInterface&Types\EventsSubscribeCheckResponse
     *
     * @throws SoapException
     */
    public function eventsSubscribeCheck(Types\EventsSubscribeCheck $parameters): Types\EventsSubscribeCheckResponse
    {
        $response = ($this->caller)('EventsSubscribeCheck', $parameters);

        \Psl\Type\instance_of(Types\EventsSubscribeCheckResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\EventsUnsubscribeUrl $parameters
     *
     * @return ResultInterface&Types\EventsUnsubscribeUrlResponse
     *
     * @throws SoapException
     */
    public function eventsUnsubscribeUrl(Types\EventsUnsubscribeUrl $parameters): Types\EventsUnsubscribeUrlResponse
    {
        $response = ($this->caller)('EventsUnsubscribeUrl', $parameters);

        \Psl\Type\instance_of(Types\EventsUnsubscribeUrlResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetTransactionClasses $parameters
     *
     * @return ResultInterface&Types\GetTransactionClassesResponse
     *
     * @throws SoapException
     */
    public function getTransactionClasses(Types\GetTransactionClasses $parameters): Types\GetTransactionClassesResponse
    {
        $response = ($this->caller)('GetTransactionClasses', $parameters);

        \Psl\Type\instance_of(Types\GetTransactionClassesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetTransactionTypes $parameters
     *
     * @return ResultInterface&Types\GetTransactionTypesResponse
     *
     * @throws SoapException
     */
    public function getTransactionTypes(Types\GetTransactionTypes $parameters): Types\GetTransactionTypesResponse
    {
        $response = ($this->caller)('GetTransactionTypes', $parameters);

        \Psl\Type\instance_of(Types\GetTransactionTypesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface&Types\GetPassageRoles $parameters
     *
     * @return ResultInterface&Types\GetPassageRolesResponse
     *
     * @throws SoapException
     */
    public function getPassageRoles(Types\GetPassageRoles $parameters): Types\GetPassageRolesResponse
    {
        $response = ($this->caller)('GetPassageRoles', $parameters);

        \Psl\Type\instance_of(Types\GetPassageRolesResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }
}
