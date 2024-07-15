<?php

namespace LazyTechwork\Parsec\Enums;

enum ParsecMethod: string
{
    case ActivateVisitorRequest = 'ActivateVisitorRequest';
    case AddBioIdentifier = 'AddBioIdentifier';
    case AddPersonIdentifier = 'AddPersonIdentifier';
    case AddPersonScheduleFix = 'AddPersonScheduleFix';
    case AddSubAccessGroup = 'AddSubAccessGroup';
    case AddToBlackList = 'AddToBlackList';
    case BlockPerson = 'BlockPerson';
    case ChangePersonIdentifier = 'ChangePersonIdentifier';
    case CheckRole = 'CheckRole';
    case CloseAllActiveVisitorRequests = 'CloseAllActiveVisitorRequests';
    case CloseEventHistorySession = 'CloseEventHistorySession';
    case CloseOrgUnitEditingSession = 'CloseOrgUnitEditingSession';
    case ClosePersonEditingSession = 'ClosePersonEditingSession';
    case CloseSession = 'CloseSession';
    case CloseVisitorRequest = 'CloseVisitorRequest';
    case ContinueSession = 'ContinueSession';
    case CreateAccessGroup = 'CreateAccessGroup';
    case CreateAccessSchedule = 'CreateAccessSchedule';
    case CreateAdvancedQRQGroup = 'CreateAdvancedQRQGroup';
    case CreateOrgUnit = 'CreateOrgUnit';
    case CreatePassageRole = 'CreatePassageRole';
    case CreatePerson = 'CreatePerson';
    case CreateTempAccessGroup = 'CreateTempAccessGroup';
    case CreateVehicle = 'CreateVehicle';
    case CreateVehicleAccessGroup = 'CreateVehicleAccessGroup';
    case CreateVehicleTempAccessGroup = 'CreateVehicleTempAccessGroup';
    case CreateVisitor = 'CreateVisitor';
    case CreateVisitorRequest = 'CreateVisitorRequest';
    case CreateWorktimeSchedule = 'CreateWorktimeSchedule';
    case DeleteAccessGroup = 'DeleteAccessGroup';
    case DeleteAdvancedQRQGroup = 'DeleteAdvancedQRQGroup';
    case DeleteBioIdentifier = 'DeleteBioIdentifier';
    case DeleteHolidays = 'DeleteHolidays';
    case DeleteIdentifier = 'DeleteIdentifier';
    case DeleteIssuedVisitorRequest = 'DeleteIssuedVisitorRequest';
    case DeleteOrgUnit = 'DeleteOrgUnit';
    case DeletePassageRole = 'DeletePassageRole';
    case DeletePerson = 'DeletePerson';
    case DeletePersonBioIdentifier = 'DeletePersonBioIdentifier';
    case DeletePersonScheduleFix = 'DeletePersonScheduleFix';
    case DeleteSchedule = 'DeleteSchedule';
    case DeleteScheduleDays = 'DeleteScheduleDays';
    case DeleteSubAccessGroup = 'DeleteSubAccessGroup';
    case EventsSubscribe = 'EventsSubscribe';
    case EventsSubscribeCheck = 'EventsSubscribeCheck';
    case EventsUnsubscribe = 'EventsUnsubscribe';
    case EventsUnsubscribeUrl = 'EventsUnsubscribeUrl';
    case FindInBlackList = 'FindInBlackList';
    case FindPeople = 'FindPeople';
    case FindPersonByIdentifier = 'FindPersonByIdentifier';
    case FindVehicle = 'FindVehicle';
    case FindVisitorRequest = 'FindVisitorRequest';
    case FindVisitors = 'FindVisitors';
    case GenerateAdvancedParsecQRCode = 'GenerateAdvancedParsecQRCode';
    case GenerateParsecQRCode = 'GenerateParsecQRCode';
    case GetAcceptedVisitorRequests = 'GetAcceptedVisitorRequests';
    case GetAccessGroups = 'GetAccessGroups';
    case GetAccessSchedules = 'GetAccessSchedules';
    case GetAdvancedQRGroups = 'GetAdvancedQRGroups';
    case GetAllBioIdentifiers = 'GetAllBioIdentifiers';
    case GetAnyData = 'GetAnyData';
    case GetBlackList = 'GetBlackList';
    case GetCardCodeFromUID = 'GetCardCodeFromUID';
    case GetDomains = 'GetDomains';
    case GetEventHistoryResult = 'GetEventHistoryResult';
    case GetEventHistoryResultCount = 'GetEventHistoryResultCount';
    case GetEvents = 'GetEvents';
    case GetHardwareEvents = 'GetHardwareEvents';
    case GetHardwareEventsResolved = 'GetHardwareEventsResolved';
    case GetHardwareState = 'GetHardwareState';
    case GetHolidays = 'GetHolidays';
    case GetIdentifierExtraData = 'GetIdentifierExtraData';
    case GetInheritedAccessGroups = 'GetInheritedAccessGroups';
    case GetIssuedVisitorRequests = 'GetIssuedVisitorRequests';
    case GetLicenseDongleInfo = 'GetLicenseDongleInfo';
    case GetMultipleBioIdentifiers = 'GetMultipleBioIdentifiers';
    case GetMultiplePersons = 'GetMultiplePersons';
    case GetObjectName = 'GetObjectName';
    case GetOrgUnit = 'GetOrgUnit';
    case GetOrgUnitSubItems = 'GetOrgUnitSubItems';
    case GetOrgUnitSubItemsHierarhyWithPersons = 'GetOrgUnitSubItemsHierarhyWithPersons';
    case GetOrgUnitSubItemsHierarhyWithVehicle = 'GetOrgUnitSubItemsHierarhyWithVehicle';
    case GetOrgUnitSubItemsHierarhyWithVisitors = 'GetOrgUnitSubItemsHierarhyWithVisitors';
    case GetOrgUnitsHierarhy = 'GetOrgUnitsHierarhy';
    case GetOrgUnitsHierarhyWithPersons = 'GetOrgUnitsHierarhyWithPersons';
    case GetOrgUnitsHierarhyWithVehicle = 'GetOrgUnitsHierarhyWithVehicle';
    case GetOrgUnitsHierarhyWithVisitors = 'GetOrgUnitsHierarhyWithVisitors';
    case GetPassageRoles = 'GetPassageRoles';
    case GetPerson = 'GetPerson';
    case GetPersonBioIdentifiers = 'GetPersonBioIdentifiers';
    case GetPersonExtraFieldTemplates = 'GetPersonExtraFieldTemplates';
    case GetPersonExtraFieldValue = 'GetPersonExtraFieldValue';
    case GetPersonExtraFieldValueString = 'GetPersonExtraFieldValueString';
    case GetPersonExtraFieldValues = 'GetPersonExtraFieldValues';
    case GetPersonIdentifiers = 'GetPersonIdentifiers';
    case GetPersonScheduleFixes = 'GetPersonScheduleFixes';
    case GetPersonVisitorRequests = 'GetPersonVisitorRequests';
    case GetPersonWorktimeSchedule = 'GetPersonWorktimeSchedule';
    case GetPersonsChangedAfter = 'GetPersonsChangedAfter';
    case GetPersonsDeletedAfter = 'GetPersonsDeletedAfter';
    case GetRootOrgUnit = 'GetRootOrgUnit';
    case GetRootTerritory = 'GetRootTerritory';
    case GetSchedule = 'GetSchedule';
    case GetScheduleDetails = 'GetScheduleDetails';
    case GetScheduleIntervals = 'GetScheduleIntervals';
    case GetSubAccessGroups = 'GetSubAccessGroups';
    case GetTerritoriesHierarhy = 'GetTerritoriesHierarhy';
    case GetTerritory = 'GetTerritory';
    case GetTerritorySubItems = 'GetTerritorySubItems';
    case GetTransactionClasses = 'GetTransactionClasses';
    case GetTransactionTypes = 'GetTransactionTypes';
    case GetUnique4bCardCode = 'GetUnique4bCardCode';
    case GetVehicleExtraFieldTemplates = 'GetVehicleExtraFieldTemplates';
    case GetVersion = 'GetVersion';
    case GetVisitorExtraFieldTemplates = 'GetVisitorExtraFieldTemplates';
    case GetVisitorRequest = 'GetVisitorRequest';
    case GetVisitorRequestWithAudit = 'GetVisitorRequestWithAudit';
    case GetVisitorRequests = 'GetVisitorRequests';
    case GetWorktimeSchedules = 'GetWorktimeSchedules';
    case LicenseGetComponent = 'LicenseGetComponent';
    case LicenseGetComponentInfo = 'LicenseGetComponentInfo';
    case LicenseRegisterFeatureObject = 'LicenseRegisterFeatureObject';
    case LicenseRegisterServer = 'LicenseRegisterServer';
    case OpenEventHistorySession = 'OpenEventHistorySession';
    case OpenOrgUnitEditingSession = 'OpenOrgUnitEditingSession';
    case OpenPersonEditingSession = 'OpenPersonEditingSession';
    case OpenSession = 'OpenSession';
    case OpenSessionWithInLocale = 'OpenSessionWithInLocale';
    case PersonSearch = 'PersonSearch';
    case RemoveFromBlackList = 'RemoveFromBlackList';
    case SaveBioIdentifier = 'SaveBioIdentifier';
    case SaveOrgUnit = 'SaveOrgUnit';
    case SavePassageRole = 'SavePassageRole';
    case SavePerson = 'SavePerson';
    case SavePersonScheduleFix = 'SavePersonScheduleFix';
    case SaveSchedule = 'SaveSchedule';
    case SaveVisitorRequest = 'SaveVisitorRequest';
    case SendHardwareCommand = 'SendHardwareCommand';
    case SendVerificationCommand = 'SendVerificationCommand';
    case SetHolidays = 'SetHolidays';
    case SetIdentifierExtraData = 'SetIdentifierExtraData';
    case SetIdentifierPrivileges = 'SetIdentifierPrivileges';
    case SetInheritedAccessGroups = 'SetInheritedAccessGroups';
    case SetPersonExtraFieldValue = 'SetPersonExtraFieldValue';
    case SetPersonExtraFieldValues = 'SetPersonExtraFieldValues';
    case SetPersonOrgUnit = 'SetPersonOrgUnit';
    case SetPersonPhoto = 'SetPersonPhoto';
    case SetPersonWorktimeSchedule = 'SetPersonWorktimeSchedule';
    case SetScheduleDays = 'SetScheduleDays';
    case SetScheduleFix = 'SetScheduleFix';
    case UnblockPerson = 'UnblockPerson';
    case ValidateExtraFieldValue = 'ValidateExtraFieldValue';
}