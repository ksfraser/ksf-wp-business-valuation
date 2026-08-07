# FR-004-007 WordpressUI: WordPress Display & Sync of Business Valuation Plan

**Related:** BR-004 Business Valuation, FR-004-001..005

## Description
The WordPress site renders a client's Business Valuation plan and provides a sync bridge to PersonalRecordsOrganizer.

## Primary actor
System (renders on shortcode) / Advisor (initiates sync).

## Main flow
1. Advisor embeds `[ksf_business_valuation_plan debtor="123"]`. 2. System loads and renders the plan. 3. Advisor syncs to PRO (fa_record_id linkage).

## Postconditions
Business Valuation plan visible on WordPress; PRO record updated.
