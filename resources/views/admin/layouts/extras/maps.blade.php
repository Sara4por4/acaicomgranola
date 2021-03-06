
@push('stylesheets')

<link href="{{ url('/')}}/admin/css/jvectormap/jquery-jvectormap.css" rel="stylesheet">

@endpush

<div class="x_panel">
    <div class="x_title">
        <h2>Localização dos Hospedes <small>Geo apresentação</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="dashboard-widget-content">
            <div class="col-md-4 hidden-small">
                <h2 class="line_30">6534 Hóspedes de difente Países</h2>

                <table class="countries_list">
                    <tbody>
                    <tr>
                        <td>Estados Unidos</td>
                        <td class="fs15 fw700 text-right">33%</td>
                    </tr>
                    <tr>
                        <td>Alemanha</td>
                        <td class="fs15 fw700 text-right">27%</td>
                    </tr>
                    <tr>
                        <td>França</td>
                        <td class="fs15 fw700 text-right">16%</td>
                    </tr>
                    <tr>
                        <td>Espanha</td>
                        <td class="fs15 fw700 text-right">11%</td>
                    </tr>
                    <tr>
                        <td>Britain</td>
                        <td class="fs15 fw700 text-right">10%</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
        </div>

    </div>
</div>
<div id="mapContainer">

    <div id="svgMapOverlay"></div>

    <div id="map"></div>

</div>
@push('scripts')
<script src="{{url('/')}}/admin/js/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{url('/')}}/admin/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{url('/')}}/admin/js/jvectormap/jquery-jvectormap-us-aea-en.js"></script>

<script>
    var gdpData = {
        "AF": 16,
        "AL": 11,
        "DZ": 158,
        "AO": 85,
        "AG": 1,
        "AR": 351,
        "AM": 8,
        "AU": 1219,
        "AT": 366,
        "AZ": 52,
        "BS": 7,
        "BH": 21,
        "BD": 105,
        "BB": 3,
        "BY": 52,
        "BE": 461,
        "BZ": 1,
        "BJ": 6,
        "BT": 1,
        "BO": 19,
        "BA": 16,
        "BW": 12,
        "BR": 2023,
        "BN": 11,
        "BG": 44,
        "BF": 8,
        "BI": 1,
        "KH": 11,
        "CM": 21,
        "CA": 1563,
        "CV": 1,
        "CF": 2,
        "TD": 7,
        "CL": 199,
        "CN": 5745,
        "CO": 283,
        "KM": 0,
        "CD": 12,
        "CG": 11,
        "CR": 35,
        "CI": 22,
        "HR": 59,
        "CY": 22,
        "CZ": 195,
        "DK": 304,
        "DJ": 1,
        "DM": 0,
        "DO": 50,
        "EC": 61,
        "EG": 216,
        "SV": 21,
        "GQ": 14,
        "ER": 2,
        "EE": 19,
        "ET": 30,
        "FJ": 3,
        "FI": 231,
        "FR": 2555,
        "GA": 12,
        "GM": 1,
        "GE": 11,
        "DE": 3305,
        "GH": 18,
        "GR": 305,
        "GD": 0,
        "GT": 40,
        "GN": 4,
        "GW": 0,
        "GY": 2,
        "HT": 6,
        "HN": 15,
        "HK": 226,
        "HU": 132,
        "IS": 12,
        "IN": 1430,
        "ID": 695,
        "IR": 337,
        "IQ": 84,
        "IE": 204,
        "IL": 201,
        "IT": 2036,
        "JM": 13,
        "JP": 5390,
        "JO": 27,
        "KZ": 129,
        "KE": 32,
        "KI": 0,
        "KR": 986,
        "UNDEFINED": 5,
        "KW": 117,
        "KG": 4,
        "LA": 6,
        "LV": 23,
        "LB": 39,
        "LS": 1,
        "LR": 0,
        "LY": 77,
        "LT": 35,
        "LU": 52,
        "MK": 9,
        "MG": 8,
        "MW": 5,
        "MY": 218,
        "MV": 1,
        "ML": 9,
        "MT": 7,
        "MR": 3,
        "MU": 9,
        "MX": 1004,
        "MD": 5,
        "MN": 5,
        "ME": 3,
        "MA": 91,
        "MZ": 10,
        "MM": 35,
        "NA": 11,
        "NP": 15,
        "NL": 770,
        "NZ": 138,
        "NI": 6,
        "NE": 5,
        "NG": 206,
        "NO": 413,
        "OM": 53,
        "PK": 174,
        "PA": 27,
        "PG": 8,
        "PY": 17,
        "PE": 153,
        "PH": 189,
        "PL": 438,
        "PT": 223,
        "QA": 126,
        "RO": 158,
        "RU": 1476,
        "RW": 5,
        "WS": 0,
        "ST": 0,
        "SA": 434,
        "SN": 12,
        "RS": 38,
        "SC": 0,
        "SL": 1,
        "SG": 217,
        "SK": 86,
        "SI": 46,
        "SB": 0,
        "ZA": 354,
        "ES": 1374,
        "LK": 48,
        "KN": 0,
        "LC": 1,
        "VC": 0,
        "SD": 65,
        "SR": 3,
        "SZ": 3,
        "SE": 444,
        "CH": 522,
        "SY": 59,
        "TW": 426,
        "TJ": 5,
        "TZ": 22,
        "TH": 312,
        "TL": 0,
        "TG": 3,
        "TO": 0,
        "TT": 21,
        "TN": 43,
        "TR": 729,
        "TM": 0,
        "UG": 17,
        "UA": 136,
        "AE": 239,
        "GB": 2258,
        "US": 14624,
        "UY": 40,
        "UZ": 37,
        "VU": 0,
        "VE": 285,
        "VN": 101,
        "YE": 30,
        "ZM": 15,
        "ZW": 5
    };
    $('document').ready(function(){

        $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionTipShow: function(e, el, code) {
                el.html(el.html() + ' (Visitantes - ' + gdpData[code] + ')');
            }
        });
    });


</script>
<!-- /jVectorMap -->
@endpush
