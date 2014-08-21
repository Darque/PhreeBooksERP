﻿<?php
// +-----------------------------------------------------------------+
// |                   PhreeBooks Open Source ERP                    |
// +-----------------------------------------------------------------+
// | Copyright(c) 2008-2014 PhreeSoft      (www.PhreeSoft.com)       |
// +-----------------------------------------------------------------+
// | This program is free software: you can redistribute it and/or   |
// | modify it under the terms of the GNU General Public License as  |
// | published by the Free Software Foundation, either version 3 of  |
// | the License, or any later version.                              |
// |                                                                 |
// | This program is distributed in the hope that it will be useful, |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of  |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   |
// | GNU General Public License for more details.                    |
// |                                                                 |
// | The license that is bundled with this package is located in the |
// | file: /doc/manual/ch01-Introduction/license.html.               |
// | If not, see http://www.gnu.org/licenses/                        |
// +-----------------------------------------------------------------+
//  Path: /modules/phreebooks/language/en_us/admin.php
//

// Modul-Informationen
define ('MODULE_PHREEBOOKS_TITLE', 'PhreeBooks Modul');
define ('MODULE_PHREEBOOKS_DESCRIPTION', 'Das Modul bietet phreebooks Doppelte Buchhaltung Funktionen umfassen Bestellungen, Kundenaufträge, Fakturierung, Journaleinträge und mehr <b> Hinweis:.. Dies ist ein Kernmodul und sollte nicht entfernt werden </ b>! ');

// Überschriften

// Installation
define ('MODULE_PHREEBOOKS_NOTES_1', 'PRIORITÄT: Geben Sie Unternehmensdaten (Firma -> Modul Admin -> Meine Firma Reiter)');
define ('MODULE_PHREEBOOKS_NOTES_2', 'LOW PRIORITY: Einrichten Mailserver-Einstellungen (Unternehmen -> Modul Admin -> Registerkarte E-Mail)');
define ('MODULE_PHREEBOOKS_NOTES_3', 'PRIORITY HIGH: eingeben oder importieren Kontenplan (Unternehmen -> Modul Admin -> PhreeBooks Modul -> Kontenplan tab)');
define ('MODULE_PHREEBOOKS_NOTES_4', 'PRIORITÄT: Set Default Sachkonten für Kunden und Lieferanten, nach dem Laden FIBU-Konten (Unternehmen -> PhreeeBooks Module Properties -> Debitoren / Kreditoren tab)');

// Allgemeine Definiert
define ('TEXT_DEFAULT_GL_ACCOUNTS', 'Default GL-Konten');
define ('TEXT_PAYMENT_TERMS', 'Zahlungsbedingungen');
define ('TEXT_ACCOUNT_AGING', 'Account Aging');
define ('TEXT_GENERAL_JOURNAL_SETTINGS', 'Allgemeine Einstellungen Journal');
define ('TEXT_NUMBER', 'Anzahl');
define ('TEXT_BOTH', 'Beide');
define ('TEXT_SINGLE_LINE_ENTRY', 'Single Line Entry');
define ('TEXT_DOUBLE_MODE', 'Double Line Entry');

define ('TEXT_CASH', 'Cash');
define ('COA_02_DESC', 'Debitoren');
define ('COA_04_DESC', 'Inventory');
define ('TEXT_OTHER_CURRENT_ASSETS', 'Sonstiges Umlaufvermögen');
define ('TEXT_FIXED_ASSETS','Sachanlagen');
define ('TEXT_ACCUMULATED_DEPRECIATION', 'Kumulierte Abschreibungen');
define ('TEXT_OTHER_ASSETS', 'Sonstige Vermögensgegenstände');
define ('TEXT_ACCOUNTS_PAYABLE', 'Kreditorenbuchhaltung');
define ('TEXT_OTHER_CURRENT_LIABILITIES', 'Sonstige kurzfristige Verbindlichkeiten ');
define ('TEXT_LONG_TERM_LIABILITIES', 'Langfristige Verbindlichkeiten');
define ('TEXT_INCOME', 'Erträge');
define ('TEXT_COST_OF_SALES', 'Cost of Sales ');
define ('COA_34_DESC', 'Aufwendungen');
define ('TEXT_DOESNT_CLOSE', 'kein\'t Schließen ');
define ('TEXT_GETS_CLOSED', 'wird geschlossen ');
define ('TEXT_RETAINED_EARNINGS', 'Gewinnrücklagen');

// Formular-Definitionen
define ('TEXT_BANK_CHECKS', 'Bank Checks');
define ('TEXT_BANK_DEPOSIT_SLIPS', 'Überweisung Slips');
define ('TEXT_COLLECTION_LETTERS', 'Collection Letters');
define ('PB_PF_CUST_CRD_MEMO', 'Gutschrift - Kunde');
define ('PB_PF_CUST_LABEL', 'Etiketten - Kunde');
define ('TEXT_CUSTOMER_QUOTES', 'Kundenzitate');
define ('TEXT_CUSTOMER_STATEMENTS', 'Kunden-Statements');
define ('TEXT_DEPOSIT_SLIPS', 'Einzahlungsscheine');
define ('TEXT_INVOICES_OR_PACKING_SLIPS', 'Rechnungen / Lieferscheine');
define ('PB_PF_PURCH_ORDER', 'Bestellungen');
define ('TEXT_SALES_ORDER', 'Sales Orders');
define ('TEXT_SALES_RECEIPTS', 'Sales Receipts ');
define ('PB_PF_VENDOR_CRD_MEMO', 'Gutschrift - Vendor');
define ('PB_PF_VENDOR_LABEL', 'Etiketten - Hersteller');
define ('TEXT_VENDOR_QUOTES', 'Hersteller Quotes');
define ('TEXT_VENDOR_STATEMENTS', 'Hersteller Statements');

/************************** (PhreeBooks Utilities) ******************* ****************************/
define ('TEXT_CUSTOMER_RECEIVABLES', 'Kunden / Forderungen');
define ('TEXT_VENDORS_PAYABLES', 'Kreditoren / Verbindlichkeiten');
define ('GEN_ADM_TOOLS_RE_POST_FAILED', 'Keine Zeitschriften wurden wieder Post, keine Maßnahmen ergriffen ausgewählt.');
define ('GEN_ADM_TOOLS_RE_POST_SUCCESS', 'Die ausgewählten Zeitschriften wurden neu geschrieben erfolgreich Die Anzahl der Datensätze neu geschrieben wurde: %s .');
define ('GEN_ADM_TOOLS_AUDIT_LOG_RE_POST', 'Re-post-Journals:');
define ('TEXT_RE-POST_JOURNAL_ENTRIES', 'Re-post-Journal Entries');
define ('GEN_ADM_TOOLS_REPOST_DESC', '<b> Sie stets Sicherungskopien Ihrer Daten, bevor Sie wieder posten, ZEITSCHRIFTEN </b> <br/> Anmerkung 1: Re-Posting Zeitschriften einige Zeit dauern kann, können Sie zur Begrenzung der re-Beiträge durch Eingabe eines kleineren Zeitraum oder eine begrenzte Anzahl von Zeitschriften ').
define ('GEN_ADM_TOOLS_REPOST_CONFIRM', "Sind Sie sicher, dass Sie wieder nach den ausgewählten Zeitschriften \n \n Sie sollten BACKUP Ihr Unternehmen vor dies zu tun?");
define ('TEXT_BANKING_OR_INVENTORY_OR_OTHER', 'Banking / Inventar / Sonstige');
define ('TEXT_RE-POST_DATE_RANGE', 'Re-post-Zeitraum ');
define ('GEN_ADM_TOOLS_START_DATE', 'Startdatum');
define ('GEN_ADM_TOOLS_END_DATE', 'Angebotsende');
define ('TEXT_RE-POST_JOURNALS', 'Re-post-Journals');

define ('TEXT_VALIDATE_AND_REPAIR_GENERAL_LEDGER_ACCOUNT_BALANCES', 'Überprüfen und Reparieren Hauptbuch Kontensalden');
define ('GEN_ADM_TOOLS_REPAIR_CHART_DESC', 'Diese Operation prüft und repariert die Tabelle über Kontoguthaben. Wenn die Kontenbilanz oder eine Jahresbilanzsumme von nicht im Gleichgewicht, das wo ich anfangen soll. Erstens bestätigen die Bilanzen zu sehen, ob es einen Fehler und reparieren, wenn sich erforderlich ').
define ('TEXT_TEST_CHART_BALANCES', 'Test Chart Balances');
define ('TEXT_FIX_CHART_BALANCE_ERRORS', 'Fix Chart Balance Fehler');
define ('TEXT_TEST_GL_BALANCES', 'Test GL Balances');
define ('TEXT_REPAIR_GL_BALANCE_ERRORS', 'Repair GL Balance Fehler');
define ('GEN_ADM_TOOLS_REPAIR_CONFIRM', 'Sind Sie sicher, dass Sie das Hauptbuch Salden repair  \n   \n Sie sollten PRINT FINANCIAL SATEMENTS und sichern Sie Ihre Firma vor dies zu tun?');
define ('GEN_ADM_TOOLS_REPAIR_ERROR_MSG', 'Es ist eine Unwucht in der Periode %s  %s  Konto verglichen: %s  mit: %s ');
define ('TEXT_YOUR_CHART_OF_ACCOUNTS_ARE_IN_BALANCE', 'Sie \' re Diagramm über Kontoguthaben sind OK ');
define ('GEN_ADM_TOOLS_REPAIR_ERROR', 'Du solltest das Diagramm Gleichgewicht reparieren. HINWEIS:! BACKUP SIE VOR REPARATUR DES BUCHUNGSPLANS balances ');
define ('TEXT_THE_CHART_BALANCES_HAVE_BEEN_REPAIRED', 'Das Diagramm gleicht wurden repariert.');
define ('TEXT_REPAIRED_GL_BALANCES', 'repariert GL Salden');

define ('GL_UTIL_HEADING_TITLE', 'General Journal Wartung, Installation und Utilities');
define ('TEXT_ACCOUNTING_PERIODS_AND_FISCAL_YEARS', 'Rechnungswesen und Epochen Geschäftsjahre');
define ('GL_UTIL_PURGE_ALL', 'Purge alle Journal Transaktionen (Neustart)');
define ('TEXT_FISCAL_YEAR', 'Geschäftsjahr');
define ('GL_UTIL_FISCAL_YEAR_TEXT', 'Geschäftsperiode Kalenderdaten können hier geändert werden Bitte beachten Sie, dass das Geschäftsjahr Termine können nicht für einen beliebigen Zeitraum bis zu geändert werden und auch die letzte allgemeine Journaleintrag in das System..');
define ('GL_UTIL_PURGE_DB', 'Löschen Sie alle Journaleinträge (Typ \' purge \'in das Textfeld ein und drücken Sie Luftdusche) <br />');
define ('GL_UTIL_PURGE_DB_CONFIRM', 'Sind Sie sicher, dass Sie alle Journaleinträge löschen?');
define ('GL_UTIL_PURGE_CONFIRM', 'Gelöschte Datensätze aller Zeitschrift und aufgeräumt Datenbanken.');
define ('GL_UTIL_PURGE_FAIL', 'Keine Journaleinträge betroffen waren!');
define ('TEXT_CURRENT_ACCOUNTING_PERIOD_IS', 'aktuelle Berichtsperiode ist');
define ('GL_WARN_ADD_FISCAL_YEAR', 'Sind Sie sicher, das Sie hinzufügen möchten Geschäftsjahr:');
define ('GL_ERROR_FISCAL_YEAR_SEQ', 'Die letzte Periode des modifizierten Geschäftsjahr nicht mit dem Beginn des nächsten Geschäftsjahres ausrichten Der Starttermin des nächsten Geschäftsjahres wurde modifiziert und sollte überprüft werden..');
define ('GL_WARN_CHANGE_ACCT_PERIOD', 'Geben Sie den Abrechnungszeitraum zu machen Strom:');
define ('GL_ERROR_BAD_ACCT_PERIOD', 'Der Abrechnungszeitraum ausgewählt ist noch nicht eingerichtet Entweder wieder in die Zeit oder fügen Sie ein Geschäftsjahr fortgesetzt werden..');
define ('GL_ERROR_NO_BALANCE', 'kann nicht aktualisiert werden, weil Anfang Salden Soll und Haben nicht übereinstimmen!');
define ('GL_ERROR_UPDATE_COA_HISTORY', 'Fehler beim Aktualisieren der Kontenplan Geschichte nach Einstellung Anfang Salden!');
define ('GL_BEG_BAL_ERROR_0', 'auf Linie');
define ('GL_BEG_BAL_ERROR_1', 'Ungültige Kontenrahmen der id in Zeile gefunden');
define ('TEXT_NO_INVOICE_NUMBER_FOUND_ON_LINE_FLAGGED_AS_WAITING_FOR_PAYMENT_ARGS', 'Keine Rechnungsnummer in Zeile %d gefunden markiert als erwartet Zahlung!');
define ('TEXT_EXITING_IMPORT_NO_INVOICE_NUMBER_FOUND_ON_LINE', 'Beenden Import Nr. Rechnungsnummer auf Linie gefunden.');
define ('GL_BEG_BAL_ERROR_4', '. Verlassen Skript Bad Datumsformat auf Zeile %d. Erwartung Format:');
define ('TEXT_SKIPPING_LINE._ZERO_TOTAL_AMOUNT_FOUND_ON_LINE', 'Skipping Linie Zero Gesamtbetrag auf Linie gefunden.');
define ('GL_BEG_BAL_ERROR_6', 'Ungültige Kontenrahmen der id in Zeile gefunden');
define ('TEXT_SKIPPING_INVENTORY_ITEM._ZERO_QUANTITY_FOUND_ON_LINE', 'Skipping Inventargegenstand Zero Menge auf Linie.');
define ('TEXT_FAILED_UPDATING_SKU_THE_PROCESS_WAS_TERMINATED_ARGS', 'Keine Aktualisierung sku %s , der Prozess beendet wurde.');
define ('TEXT_FAILED_UPDATING_ACCOUNT_THE_PROCESS_WAS_TERMINATED_ARGS', 'Keine Aktualisierung Konto %s , der Prozess beendet wurde.');
define ('TEXT_SUCCESSFULLY_POSTED_THE_CURRENT_ORDER_NUMBER_CHANGES', 'erfolgreich gebucht den aktuellen Bestellstatus ändert.');
define ('GEN_ADM_TOOLS_AUDIT_LOG_SEQ', 'Aktuelle Bestell-Status - Update');
define ('GEN_ADM_TOOLS_TITLE', 'Administrative Tools und Utilities');
define ('TEXT_CHANGE_VARIOUS_SEQUENCE_NUMBERS', 'Change Verschiedene Sequence Numbers');
define ('GEN_ADM_TOOLS_SEQ_DESC', 'Änderungen an der Sequenzierung können hier vorgenommen werden <br /> Hinweis 1:. PhreeBooks nicht erlaubt doppelte Sequenzen sicher, dass die neue Startreihenfolge wird keine Konflikte mit derzeit gebuchten Werte <br /> Hinweis. 2: Die next_deposit_num wird vom System generiert und verwendet das aktuelle Datum <br /> Anmerkung 3: Die next_check_num bei der Zahlung Bildschirm können vor der Buchung einer Zahlung und wird aus den eingegebenen Wert weiter ');
define ('GEN_ADM_TOOLS_BNK', 'Banking');
define ('GEN_ADM_TOOLS_OTHER', 'Andere');
define ('TEXT_SAVE_CHANGES', 'Save Changes');

define ('GEN_ADM_TOOLS_ARQ', 'Next Kundennummer Zitat');
define ('GEN_ADM_TOOLS_APQ', 'Next Hersteller Anzahl Zitat');
define ('GEN_ADM_TOOLS_BNKD', 'Next Hinterlegungsnummer');
define ('GEN_ADM_TOOLS_ARSO', 'Next Sales Order Number');
define ('GEN_ADM_TOOLS_APPO', 'Next Bestellnummer');
define ('GEN_ADM_TOOLS_BNKCK', 'Next Check Number');
define ('GEN_ADM_TOOLS_ARINV', 'Next Vertrieb / Invoice Number');
define ('GEN_ADM_TOOLS_ARCM', 'Next Credit Memo Nummer');
define ('GEN_ADM_TOOLS_APCM', 'Next Hersteller Credit Memo Nummer');
define ('GEN_ADM_TOOLS_SHIP', 'Nächste Sendung Anzahl');
define ('GEN_ADM_TOOLS_CUSTID', 'Next Kunden-ID');
define ('GEN_ADM_TOOLS_VENDID', 'Next Vendor ID');

/************************** (General Standard) ******************* ****************************/
define ('CD_13_01_DESC', 'ändert automatisch die aktuellen Berichtsperiode auf dem Server Datum und die aktuelle Geschäftsjahr Kalender basierend Wenn nicht aktiviert, muss der aktuelle Abrechnungszeitraum manuell in das Hauptbuch => Dienstprogramme-Menü geändert werden.');
define ('CD_13_05_DESC', 'Legt fest, wie die Sachkonten in Pulldown-Menüs Anzeige <br /> Anzahl -. GL Account Number Nur <br /> Beschreibung -. FIBU Beschreibung Nur <br /> Beide -. Beide gl-Nummer und Name angezeigt.');
define ('CD_01_50_DESC', 'Diese Funktion fügt zwei zusätzliche Felder, die Bestellung Bildschirme, einen Auftrag Ebene reduzierte Wert oder Prozent eingeben Wenn deaktiviert, werden die Felder nicht von der Reihenfolge Bildschirmen angezeigt werden.');
define ('CD_01_52_DESC', 'Bei Aktivierung dieser Funktion bewirkt, PhreeBooks berechnet Steuern Behörde vor rund um die Addition aller anwendbaren Behörden. Für Steuersätze mit einer einzigen Behörde, wird dies nur halten Mathe Präzision Fehler aus der Eingabe der Zeitschrift. Für Multi- Behörde Steuersätze, könnte dies dazu führen, zu viel oder zu wenig Steuern ab gesammelt Wenn nicht sicher sind, lassen auf Nein gesetzt. ');
define ('CD_01_55_DESC', 'Wenn auf Ja gesetzt, diese Option wird die Dateneingabe auf den Bestellformularen für USB und unterstützt Barcode-Leser zu aktivieren.');
define ('CD_01_75_DESC', 'Wenn auf Ja gesetzt, nutzt diese Möglichkeit, um eine einzelne Zeile ohne Bildschirm angezeigten Felder für den vollen Preis und Rabatt. Die einzige Zeile Bildschirm verwendet GL Kontonummern gegen den uneingeschränkten GL Kontonummern / Beschreibungen in zwei Modus. ');
/************************** (Customer Defaults) ******************* ****************************/
define ('CD_02_01_DESC', 'Default Forderungen aus Konto Typischerweise wird eine Debitoren-Typ verändern..');
define ('CD_02_02_DESC', 'Default-Konto für Verkäufe nutzen Typischerweise wird eine Gewinn-Typ verändern..');
define ('CD_02_03_DESC', 'Default-Konto für Einnahmen zu, wenn Kunden Rechnungen nicht bezahlen Verwendung Typischerweise wird eine Cash-Typ verändern..');
define ('CD_02_04_DESC', 'Default-Konto für Rabatte an, wenn die Kunden am frühen Zeitplan zahlen die Verwendung mit einem Abschlag angewandt Typischerweise wird eine Gewinn-Typ verändern..');
define ('CD_02_05_DESC', 'Default-Konto für Frachtkosten verwenden Typischerweise wird eine Gewinn-Typ verändern..');
define ('CD_02_06_DESC', 'Default-Konto für Einlagen von Kunden nutzen Typischerweise wird eine Cash-Typ verändern..');
define ('CD_02_07_DESC', 'Default-Konto für Einlagen von Kunden nutzen Typischerweise wird eine sonstige kurzfristige Verbindlichkeiten Typ verändern..');

define ('CD_02_10_DESC', 'Skonti schreiben Prozent Null oder frühen Tagen Null zu deaktivieren Skonti..');
define ('TEXT_CHECK_CUSTOMER_CREDIT_LIMIT_WHEN_PROCESSING_ORDERS', 'Überprüfen Kunden Kreditlimit bei der Verarbeitung von Aufträgen.');
define ('TEXT_DEFAULT_AMOUNT_TO_USE_FOR_CREDIT_LIMIT_ARGS', 'Default betragen für Kreditlimit nutzen ( %s ).');
define ('CD_02_13_DESC', 'Prozent (%) Rabatt bei Zahlung in');
define ('CD_02_14_DESC', 'Tage Gesamt fällig.');
define ('CD_02_15_DESC', 'Tage.');

define ('TEXT_SETS_THE_START_DATE_FOR_ACCOUNT_AGING', 'Legt den Starttermin für Rechnung Alterung.');
define ('CD_02_17_DESC', 'Bestimmt die Anzahl der Tage für die erste Warnung von überfälligen Rechnungen Die Frist beginnt ab dem Konto Aging Feld Startdatum..');
define ('CD_02_18_DESC', 'Bestimmt die Anzahl der Tage für die zweite Mahnung von überfälligen Rechnungen Die Frist beginnt ab dem Konto Aging Feld Startdatum..');
define ('CD_02_19_DESC', 'Bestimmt die Anzahl der Tage für die dritte Mahnung von überfälligen Rechnungen Die Frist beginnt ab dem Konto Aging Feld Startdatum..');
define ('TEXT_TEXT_HEADING_USED_ON_REPORTS_TO_SHOW_AGING_FOR_DUE_DATE_NUMBER', 'Text Überschrift auf Berichten verwendet für Alterung Fälligkeit Nummer 1.');
define ('CD_02_21_DESC', 'Text Überschrift auf Berichten verwendet für Alterung Fälligkeit Nummer 2.');
define ('CD_02_22_DESC', 'Text Überschrift auf Berichten verwendet für Alterung Fälligkeit Nummer 3.');
define ('CD_02_23_DESC', 'Text Überschrift auf Berichten verwendet für Alterung Fälligkeit Nummer 4.');

define ('CD_02_24_DESC', 'Legt fest, ob die Finanzierung über Gebühren überfällig Rechnungen zu berechnen.');
define ('CD_02_30_DESC', 'Falls aktiviert, Versandkosten für die Berechnung der Umsatzsteuer Wenn nicht aktiviert, Schifffahrt wird nicht besteuert werden hinzukommen..');
define ('CD_02_35_DESC', 'Wenn auf Ja gesetzt, diese Option wird automatisch eine ID zuweisen, um neue Kunden / Lieferanten, wenn sie erstellt werden.');
define ('CD_02_40_DESC', 'Diese Funktion zeigt eine Kunden-Status Popup auf dem Bildschirm, um, wenn ein Kunde aus dem Kontakt Suche Popup ausgewählt Es zeigt Salden, verändern sowie Altern als den aktiven Status des Kontos..');
define ('CD_02_50_DESC', 'Wenn Auftragsbestand Rabatte aktiviert sind, bestimmt dieser Schalter, ob die Umsatzsteuer vor oder nach der Rabatt wird auf Kundenaufträge, Sales / Rechnungen angewandt wird berechnet und Kundenzitate.');

/************************** (Vendor Defaults) ******************* ****************************/
define ('CD_03_01_DESC', 'Default-Konto für empfangene Begriffe verwenden Dieses Konto kann über durch die einzelnen Posten Datensatz geschrieben werden typischerweise ein Inventar oder Expense Typ verändern...');
define ('CD_03_02_DESC', 'Default-Konto für alle Einkäufe verwenden, wenn in den einzelnen Anbieter-Eintrag angegeben Typischerweise wird eine Kreditorenbuchhaltung Typ verändern..');
define ('CD_03_03_DESC', 'Default-Konto für Zahlungen an Lieferanten, wenn Rechnungen bezahlt sind verwenden Typischerweise wird eine Cash-Typ verändern..');
define ('CD_03_04_DESC', 'Default-Konto für Frachtkosten für Sendungen von Anbietern verwenden typischerweise eine Kostenart verändern..');
define ('CD_03_05_DESC', 'Default-Konto für den Kauf Rabatte mit frühen Rabatt Zahlungsbedingungen bezahlt verwenden Typischerweise wird eine Kreditorenbuchhaltung Typ verändern..');
define ('CD_03_06_DESC', 'Default-Konto für Auszahlungen an Lieferanten für Einlagen verwenden Typischerweise wird eine Cash-Typ verändern..');
define ('CD_03_07_DESC', 'Default-Konto für Verkäufer Einlagen verwenden Typischerweise wird eine sonstige kurzfristige Verbindlichkeiten Typ verändern..');
define ('TEXT_DEFAULT_TERMS_FOR_PAYMENT', 'Default Bedingungen für die Zahlung');
define ('CD_03_12_DESC', 'Default Betrag für Verkäufer Kreditlimit nutzen ( %s ).');
define ('CD_03_30_DESC', 'Falls aktiviert, Versandkosten für die Berechnung der Umsatzsteuer Wenn nicht aktiviert, Schifffahrt wird nicht besteuert werden hinzukommen..');
define ('CD_03_35_DESC', 'Wenn auf true gesetzt, wird diese Option automatisch eine ID zuweisen, um neue Lieferanten, wenn sie erstellt werden.');
define ('CD_03_40_DESC', 'Diese Funktion zeigt einen Lieferanten Status Popup auf dem Bildschirm, wenn ein Auftrag vom Verkäufer Kontakt Suche Popup ausgewählt Es zeigt Salden, verändern sowie Altern als den aktiven Status des Kontos..');
define ('CD_03_50_DESC', 'Wenn Auftragsbestand Rabatte aktiviert sind, bestimmt dieser Schalter, ob die Umsatzsteuer vor oder nach dem Rabatt zu Bestellungen, Einkauf angewandt wird berechnet und Hersteller Quotes.');

/************************** (Kontenplan) ****************** *****************************/
define ('TEXT_SELECT_A_STANDARD_CHART', 'Wählen Sie eine Standard-Tabelle');
define ('TEXT_REPLACE_CURRENT_CHART_OF_ACCOUNTS', 'Ersetzen aktuellen Kontenplan');
define ('TEXT_OR_CUSTOM_CHART_TO_IMPORT', 'oder benutzerdefinierte Tabelle zu importieren');
define ('GL_CHART_DELETE_WARNING', 'Hinweis: Aktuelle Kontenplan kann nicht gelöscht werden, wenn Journaleinträge vorhanden sind!');
define ('GL_JOURNAL_NOT_EMTPY', 'Die allgemeine Journal nicht leer ist, den aktuellen Kontenplan kann nicht gelöscht werden!');
define ('TEXT_THE_GL_ACCOUNT_ALREADY_EXISTS_THE_ACCOUNT_WILL_NOT_BE_ADDED_ARGS', 'Die GL-Konto: %s  existiert bereits Das Konto wird nicht hinzugefügt werden!..');
define ('GL_INFO_HEADING_ONLY', 'Dieses Konto ist eine Überschrift und kann nicht akzeptieren gebuchten Werte?');
define ('GL_INFO_PRIMARY_ACCT_ID', 'Wenn dieses Konto ein Sub-Account, wählen primäre Konto:');
define ('TEXT_THE_GL_ACCOUNT_TYPE_IS_REQUIRED', 'Der GL Kontotyp ist erforderlich!');
define ('GL_ERROR_CANT_MAKE_HEADING', 'Dieses Konto verfügt über ein ausgewogenes Es kann nicht zu einer Kopf-Konto umgewandelt werden..');
define ('TEXT_CHART_OF_ACCOUNTS', 'Kontenplan');
define ('GL_HEADING_ACCOUNT_NAME', 'Konto-ID');
define ('TEXT_SUBACCOUNT', 'Unterkonto');
define ('GL_EDIT_INTRO', 'Bitte führen Sie alle notwendigen Änderungen durch');
define ('GL_INFO_ACCOUNT_TYPE', 'Kontotyp (Erforderlich)');
define ('GL_INFO_ACCOUNT_INACTIVE', 'Account inaktiv');
define ('GL_INFO_INSERT_INTRO', 'Bitte geben Sie die neue GL-Konto mit seinen Eigenschaften');
define ('GL_INFO_NEW_ACCOUNT', 'Neues Konto');
define ('GL_INFO_EDIT_ACCOUNT', 'Konto bearbeiten');
define ('GL_INFO_DELETE_INTRO', 'Sind Sie sicher, dass Sie dieses Konto löschen  \n Accounts können nicht gelöscht, wenn es einen Journaleintrag gegen das Konto sein?.');
define ('GL_DISPLAY_NUMBER_OF_COA', TEXT_DISPLAY_NUMBER . "Konten");
define ('GL_ERROR_CANT_DELETE', 'Dieses Konto kann nicht gelöscht werden, da gibt es Journaleinträge gegen sie sein.');
define ('GL_LOG_CHART_OF_ACCOUNTS', 'Kontenplan -');

/************************** (Vertrieb / Einkauf Authorities) ***************** ******************************/
define ('TEXT_PURCHASE_TAX_AUTHORITIES', 'Bestellen Finanzamt');
define ('TEXT_SALES_TAX_AUTHORITIES', 'Sales Tax Authorities');
define ('SETUP_TAX_DESC_SHORT', 'Short Name');
define ('SETUP_TAX_GL_ACCT', 'GL Konto-ID');
define ('SETUP_TAX_RATE', 'Steuersatz (in Prozent)');
define ('SETUP_TAX_AUTH_EDIT_INTRO', 'Bitte führen Sie alle notwendigen Änderungen durch');
define ('SETUP_INFO_DESC_SHORT', 'Short Name (15 Zeichen max)');
define ('SETUP_INFO_DESC_LONG', 'Lange Beschreibung (64 Zeichen max)');
define ('SETUP_INFO_GL_ACCOUNT', 'GL-Konto, um Steuern Rekord:');
define ('TEXT_VENDOR_TO_SUBMIT_FUNDS_TO', 'Hersteller, Gelder zu übermitteln:');
define ('SETUP_INFO_TAX_RATE', 'Steuersatz (in Prozent)');
define ('SETUP_TAX_AUTH_INSERT_INTRO', 'Bitte geben Sie die neue Finanzamt mit seinen Eigenschaften');
define ('SETUP_TAX_AUTH_DELETE_INTRO', 'Sind Sie sicher, dass Sie diese Steuerbehörde löschen?');
define ('SETUP_TAX_AUTHS_DELETE_ERROR', 'kann nicht gelöscht werden Steuerbehörde, sie wird die Verwendung in einem Tagebucheintrag.');
define ('SETUP_INFO_HEADING_NEW_TAX_AUTH', 'Neue Finanzamt');
define ('SETUP_INFO_HEADING_EDIT_TAX_AUTH', 'Edit Finanzamt');
define ('SETUP_TAX_AUTHS_LOG', 'Finanzamt -');
define ('SETUP_DISPLAY_NUMBER_OF_TAX_AUTH', TEXT_DISPLAY_NUMBER . 'Steuerbehörden');
/************************** (Vertrieb / Einkauf Steuersätze) **************** *******************************/
define ('SETUP_TITLE_TAX_RATES', 'Sales Tax Preise');
define ('TEXT_PURCHASE_TAX_RATES', 'Bestellen Steuersätze');
define ('TEXT_TAX_FREIGHT', 'Tax Freight ');
define ('TEXT_TOTAL_TAX_PERCENT', 'Total Tax (in Prozent)');
define ('SETUP_TAX_EDIT_INTRO', 'Bitte führen Sie alle notwendigen Änderungen durch');
define ('SETUP_INFO_TAX_AUTHORITIES', 'Finanzamt');
define ('TEXT_SELECT_A_TAX_AUTHORITY_TO_ADD', 'Wählen Sie eine Steuerbehörde hinzufügen');
define ('TEXT_SELECT_A_TAX_AUTHORITY_TO_REMOVE', 'Wählen Sie eine Steuerbehörde zu entfernen');
define ('TEXT_FREIGHT_TAXABLE', 'Freight Steuerpflichtige');
define ('SETUP_TAX_INSERT_INTRO', 'Bitte geben Sie den neuen Steuersatz mit seinen Eigenschaften');
define ('SETUP_TAX_DELETE_INTRO', 'Sind Sie sicher, dass Sie diesen Steuersatz löschen?');
define ('SETUP_HEADING_NEW_TAX_RATE', 'New Tax Rate');
define ('SETUP_HEADING_EDIT_TAX_RATE', 'Edit Steuersatz');
define ('SETUP_DISPLAY_NUMBER_OF_TAX_RATES', TEXT_DISPLAY_NUMBER . 'Steuersätze');
define ('SETUP_TAX_RATES_LOG', 'Steuersätze -');

?>