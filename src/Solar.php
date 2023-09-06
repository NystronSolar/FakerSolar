<?php

namespace NystronSolar\FakerSolar;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class Solar extends \Faker\Provider\Base
{
    /**
     * @var string[]
     */
    protected static array $solarInverterModels = [
        /* FRONIUS PRIMO */ 'FRONIUS PRIMO 3.0-1', 'FRONIUS PRIMO 3.6-1', 'FRONIUS PRIMO 4.0-1', 'FRONIUS PRIMO 4.6-1', 'FRONIUS PRIMO 5.0-1', 'FRONIUS PRIMO 5.0-1 AUS', 'FRONIUS PRIMO 5.0-1 SC', 'FRONIUS PRIMO 6.0-1', 'FRONIUS PRIMO 8.2-1',
        /* FRONIUS PRIMO UL */ 'FRONIUS PRIMO 10.0-1 208-240', 'FRONIUS PRIMO 11.4-1 208-240', 'FRONIUS PRIMO 12.5-1 208-240', 'FRONIUS PRIMO 15.0-1 208-240', 'FRONIUS PRIMO 3.8-1 208-240', 'FRONIUS PRIMO 5.0-1 208-240', 'FRONIUS PRIMO 6.0-1 208-240', 'FRONIUS PRIMO 7.6-1 208-240', 'FRONIUS PRIMO 8.2-1 208-240',
        /* FRONIUS PRIMO G24 PLUS */ 'FRONIUS PRIMO GEN24 3.0 PLUS', 'FRONIUS PRIMO GEN24 3.6 PLUS', 'FRONIUS PRIMO GEN24 4.0 PLUS', 'FRONIUS PRIMO GEN24 4.6 PLUS', 'FRONIUS PRIMO GEN24 5.0 PLUS', 'FRONIUS PRIMO GEN24 6.0 PLUS',
        /* FRONIUS SYMO */ 'FRONIUS SYMO 3.0-3-M', 'FRONIUS SYMO 3.0-3-S', 'FRONIUS SYMO 3.7-3-M', 'FRONIUS SYMO 3.7-3-S', 'FRONIUS SYMO 4.5-3-M', 'FRONIUS SYMO 4.5-3-S', 'FRONIUS SYMO 5.0-3-M', 'FRONIUS SYMO 6.0-3-M', 'FRONIUS SYMO 7.0-3-M', 'FRONIUS SYMO 8.2-3-M ',
        /* FRONIUS SYMO UL */ 'FRONIUS SYMO 15.0-3 208',
        /* FRONIUS SYMO G24 PLUS */ 'FRONIUS SYMO GEN24 3.0 PLUS', 'FRONIUS SYMO GEN24 4.0 PLUS', 'FRONIUS SYMO GEN24 5.0 PLUS', 'FRONIUS SYMO GEN24 6.0 PLUS', 'FRONIUS SYMO GEN24 8.0 PLUS', 'FRONIUS SYMO GEN24 10.0 PLUS',
        /* FRONIUS ECO */ 'FRONIUS ECO 25.0-3-S', 'FRONIUS ECO 27.0-3-S',
        /* FRONIUS SYMO ADVANCED */ 'FRONIUS SYMO ADVANCED 10.0-3-M', 'FRONIUS SYMO ADVANCED 12.5-3-M', 'FRONIUS SYMO ADVANCED 15.0-3-M', 'FRONIUS SYMO ADVANCED 17.5-3-M', 'FRONIUS SYMO ADVANCED 20.0-3-M',
        /* FRONIUS SYMO ADVANCED UL */ 'FRONIUS SYMO ADVANCED 10.0-3 208-240', 'FRONIUS SYMO ADVANCED 12.0-3 208-240', 'FRONIUS SYMO ADVANCED 15.0-3 480', 'FRONIUS SYMO ADVANCED 20.0-3 480', 'FRONIUS SYMO ADVANCED 22.7-3 480', 'FRONIUS SYMO ADVANCED 24.0-3 480',
        /* FRONIUS TAURO */ 'TAURO 50-3-D', 'TAURO 50-3-P',
        /* FRONIUS TAURO ECO */ 'TAURO ECO 100-3-D', 'TAURO ECO 100-3-P', 'TAURO ECO 50-3-D', 'TAURO ECO 50-3-P', 'TAURO ECO 99-3-D', 'TAURO ECO 99-3-P',

        /* Growatt Microinverter */ 'NEO 2000M-X',
        /* Growatt Residential PV Inverter */ 'Growatt MIC 750-3300TL-X', 'Growatt MIN 2500-6000TL-X/XH', 'Growatt MIN 7000-10000TL-X', 'Growatt MOD 3-15KTL3-X/XH',
        /* Growatt Commercial & Industrial PV Inverter */ 'Growatt MID 11-30KTL3-XH', 'Growatt MID 15-25KTL3-X', 'Growatt MID 25-40KTL3-X', 'Growatt MID 30-50KTL3-X2', 'Growatt MAC 50-70KTL3-X LV/MV', 'Growatt MAX 50-80KTL3 LV', 'Growatt MAX 100-150KTL3-X LV/MV', 'Growatt MAX 100-150KTL3-X2 LV/MV',
        /* Growatt Utility-Scale PV Inverter */ 'MAX 185-253KTL3-X HV',
        /* Growatt Residential Storage Inverter */ 'Growatt MIN 2500-6000TL-XH', 'Growatt MIN 2500-5000TL-XA', 'Growatt MOD 3000-10000TL3-XH', 'Growatt SPH 3000-6000TL BL-UP', 'Growatt SPH 10000TL-HU', 'Growatt SPH 4000-10000TL3 BH-UP', 'Growatt SPA 4000-10000TL3 BH-UP', 'Growatt MIN 3000-11400TL-XH-US',
        /* Growatt Off-Grid Storage Inverter */ 'Growatt SPF_6000_ES_Plus', 'Growatt SPF_3000-5000_ES', 'Growatt SPF_3000TL_LVM-ES', 'Growatt SPF_2000-5000TL_HVM (LVM)', 'Growatt SPF_3000-6000T_HVM(DVM)-G2', 'Growatt SPF_4-12KT_HVM', 'Growatt SPF_4000-12000T_DVM(DVM-MPV)', 'Growatt SPI 3000-22000', 'Growatt SPI 750-4000TL2-HV',
        /* Growatt Commercial Storage Inverter */ 'Growatt WIT 50-100K-HU/AU', 'Growatt WIT 50-100K-HU/AU-US', 'Growatt WIT 28-55K-HU/AU-US L2',

        /* CanadianSolar Utility Inverter */ 'CanadianSolar Utility 255 kW', 'CanadianSolar Utility 125 kW Single Input', 'CanadianSolar Utility 125 kW 20 Input',
        /* CanadianSolar Comercial Inverter */ 'CanadianSolar Comercial 15-25 kW', 'CanadianSolar Comercial 40-60 kW', 'CanadianSolar Comercial 75-120 kW',
        /* CanadianSolar Residential Inverter */ 'CanadianSolar Residential 3-9 kW with DC BOX', 'CanadianSolar Residential 5-20 kW', 'CanadianSolar Residential 3-9 kW without DC Box',

        /* WEG Single-phase Inverter */ 'WEG Single-phase SIW200G', 'WEG Single-phase SIW300H',
        /* WEG Three-phase Inverter */ 'WEG Three-phase SIW400G', 'WEG Three-phase SIW500H M2', 'WEG Three-phase SIW500H M3',

        /* REFUsol */ 'REFUsol 20K-2T (G3)', 'REFUsol 33K', 'REFUsol 50K', 'REFUsol 100K',
    ];

    /**
     * @return string
     */
    public function solarInverterModel()
    {
        /** @var string */
        return static::randomElement(static::$solarInverterModels);
    }
}
