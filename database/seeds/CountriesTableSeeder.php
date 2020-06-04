<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = Carbon::now();
        $countries = [
            [
                'continent_id' => 1,
                'cn_name' => '中国',
                'en_name' => 'China',
                'ping_name' => 'zhongguo',
                'code' => 'CHN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '阿尔巴尼亚',
                'en_name' => 'Albania',
                'ping_name' => 'aerbaniya',
                'code' => 'ALB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '阿尔及利亚',
                'en_name' => 'Algeria',
                'ping_name' => 'aerjiliya',
                'code' => 'DZA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '阿富汗',
                'en_name' => 'Afghanistan',
                'ping_name' => 'afuhan',
                'code' => 'AFG',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '阿根廷',
                'en_name' => 'Argentina',
                'ping_name' => 'agenting',
                'code' => 'ARG',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '阿拉伯联合酋长国',
                'en_name' => 'United Arab Emirates',
                'ping_name' => 'alabolianheqiuchangguo',
                'code' => 'ARE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '阿鲁巴',
                'en_name' => 'Aruba',
                'ping_name' => 'aluba',
                'code' => 'ABW',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '阿曼',
                'en_name' => 'Oman',
                'ping_name' => 'aman',
                'code' => 'OMN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '阿塞拜疆',
                'en_name' => 'Azerbaijan',
                'ping_name' => 'asaibaijiang',
                'code' => 'AZE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '阿森松岛',
                'en_name' => 'Ascension Island',
                'ping_name' => 'asensongdao',
                'code' => 'ASC',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '埃及',
                'en_name' => 'Egypt',
                'ping_name' => 'aiji',
                'code' => 'EGY',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '埃塞俄比亚',
                'en_name' => 'Ethiopia',
                'ping_name' => 'aisaiebiya',
                'code' => 'ETH',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '爱尔兰',
                'en_name' => 'Ireland',
                'ping_name' => 'aierlan',
                'code' => 'IRL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '爱沙尼亚',
                'en_name' => 'Estonia',
                'ping_name' => 'aishaniya',
                'code' => 'EST',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '安道尔',
                'en_name' => 'Andorra',
                'ping_name' => 'andaoer',
                'code' => 'AND',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '安哥拉',
                'en_name' => 'Angola',
                'ping_name' => 'angela',
                'code' => 'AGO',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '安圭拉',
                'en_name' => 'Anguilla',
                'ping_name' => 'anguila',
                'code' => 'AIA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '安提瓜岛和巴布达',
                'en_name' => 'Antigua and Barbuda',
                'ping_name' => 'antiguadaohebabuda',
                'code' => 'ATG',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '奥地利',
                'en_name' => 'Austria',
                'ping_name' => 'aodili',
                'code' => 'AUT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '奥兰群岛',
                'en_name' => 'Aland lslands',
                'ping_name' => 'aolanqundao',
                'code' => 'ALA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '巴巴多斯岛',
                'en_name' => 'Barbados',
                'ping_name' => 'babaduosidao',
                'code' => 'BRB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '巴哈马',
                'en_name' => 'Bahamas',
                'ping_name' => 'bahama',
                'code' => 'BHS',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '巴基斯坦',
                'en_name' => 'Pakistan',
                'ping_name' => 'bajisitan',
                'code' => 'PAK',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '巴拉圭',
                'en_name' => 'Paraguay',
                'ping_name' => 'balagui',
                'code' => 'PRY',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '巴勒斯坦',
                'en_name' => 'Palestinian Authority',
                'ping_name' => 'balesitan',
                'code' => 'PSE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '巴林',
                'en_name' => 'Bahrain',
                'ping_name' => 'balin',
                'code' => 'BHR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '巴拿马',
                'en_name' => 'Panama',
                'ping_name' => 'banama',
                'code' => 'PAN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '巴西',
                'en_name' => 'Brazil',
                'ping_name' => 'baxi',
                'code' => 'BRA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '白俄罗斯',
                'en_name' => 'White Russia',
                'ping_name' => 'baieluosi',
                'code' => 'BLR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '百慕大',
                'en_name' => 'Bermuda',
                'ping_name' => 'baimuda',
                'code' => 'BMU',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '保加利亚',
                'en_name' => 'Bulgaria',
                'ping_name' => 'baojialiya',
                'code' => 'BGR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '北马里亚纳群岛',
                'en_name' => 'Northern Mariana Islands',
                'ping_name' => 'beimaliyanaqundao',
                'code' => 'MNP',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '贝宁',
                'en_name' => 'Benin',
                'ping_name' => 'beining',
                'code' => 'BEN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '比利时',
                'en_name' => 'Belgium',
                'ping_name' => 'bilishi',
                'code' => 'BEL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '冰岛',
                'en_name' => 'Iceland',
                'ping_name' => 'bingdao',
                'code' => 'ISL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '波多黎各',
                'en_name' => 'Puerto Rico',
                'ping_name' => 'boduolige',
                'code' => 'PRI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '波兰',
                'en_name' => 'Poland',
                'ping_name' => 'bolan',
                'code' => 'POL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '玻利维亚',
                'en_name' => 'Bolivia',
                'ping_name' => 'boliweiya',
                'code' => 'BOL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '波斯尼亚和黑塞哥维那',
                'en_name' => 'Bosnia and Herzegovina',
                'ping_name' => 'bosiniyaheheisaigeweina',
                'code' => 'BIH',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '博茨瓦纳',
                'en_name' => 'Botswana',
                'ping_name' => 'bociwana',
                'code' => 'BWA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '伯利兹',
                'en_name' => 'Belize',
                'ping_name' => 'bolizi',
                'code' => 'BLZ',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '不丹',
                'en_name' => 'Bhutan',
                'ping_name' => 'budan',
                'code' => 'BTN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '布基纳法索',
                'en_name' => 'Burkina Faso',
                'ping_name' => 'bujinafasuo',
                'code' => 'BFA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '布隆迪',
                'en_name' => 'Burundi',
                'ping_name' => 'bulongdi',
                'code' => 'BDI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '布韦岛',
                'en_name' => 'Bouvet Island',
                'ping_name' => 'buweidao',
                'code' => 'BVT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '朝鲜',
                'en_name' => 'North Korea',
                'ping_name' => 'chaoxian',
                'code' => 'PRK',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '丹麦',
                'en_name' => 'Denmark',
                'ping_name' => 'danmai',
                'code' => 'DNK',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '德国',
                'en_name' => 'Germany',
                'ping_name' => 'deguo',
                'code' => 'DEU',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '东帝汶',
                'en_name' => 'Timor-Leste',
                'ping_name' => 'dongdi',
                'code' => 'TLS',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '多哥',
                'en_name' => 'Togo',
                'ping_name' => 'duoge',
                'code' => 'TGO',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '多米尼加',
                'en_name' => 'Dominica',
                'ping_name' => 'duominijia',
                'code' => 'DMA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '多米尼加共和国',
                'en_name' => 'Dominican Republic',
                'ping_name' => 'duominijiagongheguo',
                'code' => 'DOM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '俄罗斯',
                'en_name' => 'Russia',
                'ping_name' => 'eluosi',
                'code' => 'RUS',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '厄瓜多尔',
                'en_name' => 'Ecuador',
                'ping_name' => 'eguaduoer',
                'code' => 'ECU',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '厄立特里亚',
                'en_name' => 'Eritrea',
                'ping_name' => 'eliteliya',
                'code' => 'ERI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '法国',
                'en_name' => 'France',
                'ping_name' => 'faguo',
                'code' => 'FRA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '法罗群岛',
                'en_name' => 'Faroe Islands',
                'ping_name' => 'faluoqundao',
                'code' => 'FRO',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '法属圭亚那',
                'en_name' => 'French Guiana',
                'ping_name' => 'fashuguiyana',
                'code' => 'GUF',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '法属南部领地',
                'en_name' => 'French Southern and Antarctic Lands',
                'ping_name' => 'fashunanbulingdi',
                'code' => 'ATF',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '梵蒂冈',
                'en_name' => 'Vatican City',
                'ping_name' => 'digang',
                'code' => 'VAT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '菲律宾',
                'en_name' => 'Philippines',
                'ping_name' => 'feilvbin',
                'code' => 'PHL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '芬兰',
                'en_name' => 'Finland',
                'ping_name' => 'fenlan',
                'code' => 'FIN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '佛得角',
                'en_name' => 'Cape Verde',
                'ping_name' => 'fodejiao',
                'code' => 'CPV',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '弗兰克群岛',
                'en_name' => 'Falkland Islands',
                'ping_name' => 'fulankequndao',
                'code' => 'FLK',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '冈比亚',
                'en_name' => 'Gambia',
                'ping_name' => 'gangbiya',
                'code' => 'GMB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '刚果',
                'en_name' => 'Congo',
                'ping_name' => 'gangguo',
                'code' => 'COG',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '刚果民主共和国',
                'en_name' => 'Congo(DRC)',
                'ping_name' => 'gangguominzhugongheguo',
                'code' => 'COD',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '哥伦比亚',
                'en_name' => 'Colombia',
                'ping_name' => 'gelunbiya',
                'code' => 'COL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '哥斯达黎加',
                'en_name' => 'Costa Rica',
                'ping_name' => 'gesidalijia',
                'code' => 'CRI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '格恩西岛',
                'en_name' => 'Guernsey',
                'ping_name' => 'geenxidao',
                'code' => 'GGY',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '格林纳达',
                'en_name' => 'Grenada',
                'ping_name' => 'gelinnada',
                'code' => 'GRD',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '格陵兰',
                'en_name' => 'Greenland',
                'ping_name' => 'gelinglan',
                'code' => 'GRL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '古巴',
                'en_name' => 'Cuba',
                'ping_name' => 'guba',
                'code' => 'CUB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '瓜德罗普',
                'en_name' => 'Guadeloupe',
                'ping_name' => 'guadeluopu',
                'code' => 'GLP',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '圭亚那',
                'en_name' => 'Guyana',
                'ping_name' => 'guiyana',
                'code' => 'GUY',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '哈萨克斯坦',
                'en_name' => 'Kazakhstan',
                'ping_name' => 'hasakesitan',
                'code' => 'KAZ',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '海地',
                'en_name' => 'Haiti',
                'ping_name' => 'haidi',
                'code' => 'HTI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '韩国',
                'en_name' => 'Korea',
                'ping_name' => 'hanguo',
                'code' => 'KOR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '荷兰',
                'en_name' => 'Netherlands',
                'ping_name' => 'helan',
                'code' => 'NLD',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '荷属安地列斯',
                'en_name' => 'Netherlands Antilles',
                'ping_name' => 'heshuandiliesi',
                'code' => 'ANT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '洪都拉斯',
                'en_name' => 'Honduras',
                'ping_name' => 'hongdulasi',
                'code' => 'HND',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '吉布提',
                'en_name' => 'Djibouti',
                'ping_name' => 'jibuti',
                'code' => 'DJI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '吉尔吉斯斯坦',
                'en_name' => 'Kyrgyzstan',
                'ping_name' => 'jierjisisitan',
                'code' => 'KGZ',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '几内亚',
                'en_name' => 'Guinea',
                'ping_name' => 'jineiya',
                'code' => 'GIN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '几内亚比绍',
                'en_name' => 'Guinea-Bissau',
                'ping_name' => 'jineiyabishao',
                'code' => 'GNB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '加拿大',
                'en_name' => 'Canada',
                'ping_name' => 'jianada',
                'code' => 'CAN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '加纳',
                'en_name' => 'Ghana',
                'ping_name' => 'jiana',
                'code' => 'GHA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '加蓬',
                'en_name' => 'Gabon',
                'ping_name' => 'jiapeng',
                'code' => 'GAB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '柬埔寨',
                'en_name' => 'Cambodia',
                'ping_name' => 'jianpuzhai',
                'code' => 'KHM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '捷克共和国',
                'en_name' => 'Czech Republic',
                'ping_name' => 'jiekegongheguo',
                'code' => 'CZE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '津巴布韦',
                'en_name' => 'Zimbabwe',
                'ping_name' => 'jinbabuwei',
                'code' => 'ZWE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '喀麦隆',
                'en_name' => 'Cameroon',
                'ping_name' => 'kamailong',
                'code' => 'CMR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '卡塔尔',
                'en_name' => 'Qatar',
                'ping_name' => 'kataer',
                'code' => 'QAT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '开曼群岛',
                'en_name' => 'Cayman Islands',
                'ping_name' => 'kaimanqundao',
                'code' => 'CYM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '科摩罗',
                'en_name' => 'Comoros',
                'ping_name' => 'kemoluo',
                'code' => 'COM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '科特迪瓦',
                'en_name' => 'Cote d\'Ivoire',
                'ping_name' => 'ketediwa',
                'code' => 'CIV',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '科威特',
                'en_name' => 'Kuwait',
                'ping_name' => 'keweite',
                'code' => 'KWT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '克罗地亚',
                'en_name' => 'Croatia',
                'ping_name' => 'keluodiya',
                'code' => 'HRV',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '肯尼亚',
                'en_name' => 'Kenya',
                'ping_name' => 'kenniya',
                'code' => 'KEN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '拉脱维亚',
                'en_name' => 'Latvia',
                'ping_name' => 'latuoweiya',
                'code' => 'LVA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '莱索托',
                'en_name' => 'Lesotho',
                'ping_name' => 'laisuotuo',
                'code' => 'LSO',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '老挝',
                'en_name' => 'Laos',
                'ping_name' => 'laowo',
                'code' => 'LAO',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '黎巴嫩',
                'en_name' => 'Lebanon',
                'ping_name' => 'libanen',
                'code' => 'LBN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '利比里亚',
                'en_name' => 'Liberia',
                'ping_name' => 'libiliya',
                'code' => 'LBR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '利比亚',
                'en_name' => 'Libya',
                'ping_name' => 'libiya',
                'code' => 'LBY',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '立陶宛',
                'en_name' => 'Lithuania',
                'ping_name' => 'litaowan',
                'code' => 'LTU',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '列支敦士登',
                'en_name' => 'Liechtenstein',
                'ping_name' => 'liezhidunshideng',
                'code' => 'LIE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '留尼旺岛',
                'en_name' => 'Reunion',
                'ping_name' => 'liuniwangdao',
                'code' => 'REU',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '卢森堡',
                'en_name' => 'Luxembourg',
                'ping_name' => 'lusenbao',
                'code' => 'LUX',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '卢旺达',
                'en_name' => 'Rwanda',
                'ping_name' => 'luwangda',
                'code' => 'RWA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '罗马尼亚',
                'en_name' => 'Romania',
                'ping_name' => 'luomaniya',
                'code' => 'ROU',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '马达加斯加',
                'en_name' => 'Madagascar',
                'ping_name' => 'madajiasijia',
                'code' => 'MDG',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '马尔代夫',
                'en_name' => 'Maldives',
                'ping_name' => 'maerdaifu',
                'code' => 'MDV',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '马耳他',
                'en_name' => 'Malta',
                'ping_name' => 'maerta',
                'code' => 'MLT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '马拉维',
                'en_name' => 'Malawi',
                'ping_name' => 'malawei',
                'code' => 'MWI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '马来西亚',
                'en_name' => 'Malaysia',
                'ping_name' => 'malaixiya',
                'code' => 'MYS',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '马里',
                'en_name' => 'Mali',
                'ping_name' => 'mali',
                'code' => 'MLI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '马其顿',
                'en_name' => 'Macedonia,Former Yugoslav Republic of',
                'ping_name' => 'maqidun',
                'code' => 'MKD',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '马提尼克',
                'en_name' => 'Martinique',
                'ping_name' => 'matinike',
                'code' => 'MTQ',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '马约特岛',
                'en_name' => 'Mayotte',
                'ping_name' => 'mayuetedao',
                'code' => 'MYT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '曼岛',
                'en_name' => 'Isle of Man',
                'ping_name' => 'mandao',
                'code' => 'IMN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '毛里求斯',
                'en_name' => 'Mauritius',
                'ping_name' => 'maoliqiusi',
                'code' => 'MUS',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '毛里塔尼亚',
                'en_name' => 'Mauritania',
                'ping_name' => 'maolitaniya',
                'code' => 'MRT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '美国',
                'en_name' => 'United States',
                'ping_name' => 'meiguo',
                'code' => 'USA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '美属外岛',
                'en_name' => 'United States Minor Outlying Islands',
                'ping_name' => 'meishuwaidao',
                'code' => 'UMI',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '蒙古',
                'en_name' => 'Mongolia',
                'ping_name' => 'menggu',
                'code' => 'MNG',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '蒙特塞拉特',
                'en_name' => 'Montserrat',
                'ping_name' => 'mengtesailate',
                'code' => 'MSR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '孟加拉',
                'en_name' => 'Bangladesh',
                'ping_name' => 'mengjiala',
                'code' => 'BGD',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '秘鲁',
                'en_name' => 'Peru',
                'ping_name' => 'milu',
                'code' => 'PER',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '缅甸',
                'en_name' => 'Myanmar',
                'ping_name' => 'miandian',
                'code' => 'MMR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '摩尔多瓦',
                'en_name' => 'Moldova',
                'ping_name' => 'moerduowa',
                'code' => 'MDA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '摩洛哥',
                'en_name' => 'Morocco',
                'ping_name' => 'moluoge',
                'code' => 'MAR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '摩纳哥',
                'en_name' => 'Monaco',
                'ping_name' => 'monage',
                'code' => 'MCO',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '莫桑比克',
                'en_name' => 'Mozambique',
                'ping_name' => 'mosangbike',
                'code' => 'MOZ',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '墨西哥',
                'en_name' => 'Mexico',
                'ping_name' => 'moxige',
                'code' => 'MEX',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '纳米比亚',
                'en_name' => 'Namibia',
                'ping_name' => 'namibiya',
                'code' => 'NAM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '南非',
                'en_name' => 'South Africa',
                'ping_name' => 'nanfei',
                'code' => 'ZAF',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '尼泊尔',
                'en_name' => 'Nepal',
                'ping_name' => 'niboer',
                'code' => 'NPL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '尼加拉瓜',
                'en_name' => 'Nicaragua',
                'ping_name' => 'nijialagua',
                'code' => 'NIC',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '尼日尔',
                'en_name' => 'Niger',
                'ping_name' => 'nirier',
                'code' => 'NER',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '尼日利亚',
                'en_name' => 'Nigeria',
                'ping_name' => 'niriliya',
                'code' => 'NGA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '挪威',
                'en_name' => 'Norway',
                'ping_name' => 'nuowei',
                'code' => 'NOR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '诺福克',
                'en_name' => 'Norfolk Island',
                'ping_name' => 'nuofuke',
                'code' => 'NFK',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '葡萄牙',
                'en_name' => 'Portugal',
                'ping_name' => 'putaoya',
                'code' => 'PRT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '日本',
                'en_name' => 'Japan',
                'ping_name' => 'riben',
                'code' => 'JPN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '瑞典',
                'en_name' => 'Sweden',
                'ping_name' => 'ruidian',
                'code' => 'SWE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '瑞士',
                'en_name' => 'Switzerland',
                'ping_name' => 'ruishi',
                'code' => 'CHE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '萨尔瓦多',
                'en_name' => 'El Salvador',
                'ping_name' => 'saerwaduo',
                'code' => 'SLV',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '塞尔维亚,黑山',
                'en_name' => 'Serbia,Montenegro',
                'ping_name' => 'saierweiyaheishan',
                'code' => 'SCG',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '塞拉利昂',
                'en_name' => 'Sierra Leone',
                'ping_name' => 'sailaliang',
                'code' => 'SLE',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '塞内加尔',
                'en_name' => 'Senegal',
                'ping_name' => 'saineijiaer',
                'code' => 'SEN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '塞浦路斯',
                'en_name' => 'Cyprus',
                'ping_name' => 'saipulusi',
                'code' => 'CYP',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '塞舌尔',
                'en_name' => 'Seychelles',
                'ping_name' => 'saisheer',
                'code' => 'SYC',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '沙特阿拉伯',
                'en_name' => 'Saudi Arabia',
                'ping_name' => 'shatealabo',
                'code' => 'SAU',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '圣多美和普林西比',
                'en_name' => 'Sao Tome and Principe',
                'ping_name' => 'shengduomeihepulinxibi',
                'code' => 'STP',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '圣赫勒拿',
                'en_name' => 'St.Helena',
                'ping_name' => 'shenghelena',
                'code' => 'SHN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '圣基茨和尼维斯',
                'en_name' => 'St.Kitts and Nevis',
                'ping_name' => 'shengjiciheniweisi',
                'code' => 'KNA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '圣卢西亚',
                'en_name' => 'St.Lucia',
                'ping_name' => 'shengluxiya',
                'code' => 'LCA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '圣马力诺',
                'en_name' => 'San Marino',
                'ping_name' => 'shengmalinuo',
                'code' => 'SMR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '圣皮埃尔和米克隆群岛',
                'en_name' => 'St.Pierre and Miquelon',
                'ping_name' => 'shengpiaierhemikelongqundao',
                'code' => 'SPM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '圣文森特和格林纳丁斯',
                'en_name' => 'St.Vincent and the Grenadines',
                'ping_name' => 'shengwensentehegelinnadingsi',
                'code' => 'VCT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '斯里兰卡',
                'en_name' => 'Sri Lanka',
                'ping_name' => 'sililanka',
                'code' => 'LKA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '斯洛伐克',
                'en_name' => 'Slovakia',
                'ping_name' => 'siluofake',
                'code' => 'SVK',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '斯洛文尼亚',
                'en_name' => 'Slovenia',
                'ping_name' => 'siluowenniya',
                'code' => 'SVN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '斯瓦尔巴和扬马廷',
                'en_name' => 'Svalbard and Jan Mayen',
                'ping_name' => 'siwaerbaheyangmating',
                'code' => 'SJM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '斯威士兰',
                'en_name' => 'Swaziland',
                'ping_name' => 'siweishilan',
                'code' => 'SWZ',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '苏丹',
                'en_name' => 'Sudan',
                'ping_name' => 'sudan',
                'code' => 'SDN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '苏里南',
                'en_name' => 'Suriname',
                'ping_name' => 'sulinan',
                'code' => 'SUR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '索马里',
                'en_name' => 'Somalia',
                'ping_name' => 'suomali',
                'code' => 'SOM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '塔吉克斯坦',
                'en_name' => 'Tajikistan',
                'ping_name' => 'tajikesitan',
                'code' => 'TJK',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '泰国',
                'en_name' => 'Thailand',
                'ping_name' => 'taiguo',
                'code' => 'THA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '坦桑尼亚',
                'en_name' => 'Tanzania',
                'ping_name' => 'tansangniya',
                'code' => 'TZA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '特克斯和凯克特斯群岛',
                'en_name' => 'Turks and Caicos Islands',
                'ping_name' => 'tekesihekaiketesiqundao',
                'code' => 'TCA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '特里斯坦达昆哈',
                'en_name' => 'Tristan da Cunha',
                'ping_name' => 'telisitandakunha',
                'code' => 'TAA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '特立尼达和多巴哥',
                'en_name' => 'Trinidad and Tobago',
                'ping_name' => 'telinidaheduobage',
                'code' => 'TTO',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '突尼斯',
                'en_name' => 'Tunisia',
                'ping_name' => 'tunisi',
                'code' => 'TUN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '土耳其',
                'en_name' => 'Turkey',
                'ping_name' => 'tuerqi',
                'code' => 'TUR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '土库曼斯坦',
                'en_name' => 'Turkmenistan',
                'ping_name' => 'tukumansitan',
                'code' => 'TKM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '危地马拉',
                'en_name' => 'Guatemala',
                'ping_name' => 'weidimala',
                'code' => 'GTM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '维尔京群岛，美属',
                'en_name' => 'Virgin Islands',
                'ping_name' => 'weierjingqundaomeishu',
                'code' => 'VIR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '维尔京群岛，英属',
                'en_name' => 'Virgin Islands,British',
                'ping_name' => 'weierjingqundaoyingshu',
                'code' => 'VGB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '委内瑞拉',
                'en_name' => 'Venezuela',
                'ping_name' => 'weineiruila',
                'code' => 'VEN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '文莱',
                'en_name' => 'Brunei',
                'ping_name' => 'wenlai',
                'code' => 'BRN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '乌干达',
                'en_name' => 'Uganda',
                'ping_name' => 'wuganda',
                'code' => 'UGA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '乌克兰',
                'en_name' => 'Ukraine',
                'ping_name' => 'wukelan',
                'code' => 'UKR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '乌拉圭',
                'en_name' => 'Uruguay',
                'ping_name' => 'wulagui',
                'code' => 'URY',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '乌兹别克斯坦',
                'en_name' => 'Uzbekistan',
                'ping_name' => 'wuzibiekesitan',
                'code' => 'UZB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '西班牙',
                'en_name' => 'Spain',
                'ping_name' => 'xibanya',
                'code' => 'ESP',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '希腊',
                'en_name' => 'Greece',
                'ping_name' => 'xila',
                'code' => 'GRC',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '新加坡',
                'en_name' => 'Singapore',
                'ping_name' => 'xinjiapo',
                'code' => 'SGP',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '匈牙利',
                'en_name' => 'Hungary',
                'ping_name' => 'xiongyali',
                'code' => 'HUN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '叙利亚',
                'en_name' => 'Syria',
                'ping_name' => 'xuliya',
                'code' => 'SYR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 3,
                'cn_name' => '牙买加',
                'en_name' => 'Jamaica',
                'ping_name' => 'yamaijia',
                'code' => 'JAM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '亚美尼亚',
                'en_name' => 'Armenia',
                'ping_name' => 'yameiniya',
                'code' => 'ARM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '也门',
                'en_name' => 'Yemen',
                'ping_name' => 'yemen',
                'code' => 'YEM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '伊拉克',
                'en_name' => 'Iraq',
                'ping_name' => 'yilake',
                'code' => 'IRQ',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '伊朗',
                'en_name' => 'Iran',
                'ping_name' => 'yilang',
                'code' => 'IRN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '以色列',
                'en_name' => 'Israel',
                'ping_name' => 'yiselie',
                'code' => 'ISR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '意大利',
                'en_name' => 'Italy',
                'ping_name' => 'yidali',
                'code' => 'ITA',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '印度',
                'en_name' => 'India',
                'ping_name' => 'yindu',
                'code' => 'IND',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '印度尼西亚',
                'en_name' => 'Indonesia',
                'ping_name' => 'yindunixiya',
                'code' => 'IDN',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '英国',
                'en_name' => 'United Kingdom',
                'ping_name' => 'yingguo',
                'code' => 'GBR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '英属印度洋领地',
                'en_name' => 'British Indian Ocean Territory',
                'ping_name' => 'yingshuyinduyanglingdi',
                'code' => 'IOT',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '约旦',
                'en_name' => 'Jordan',
                'ping_name' => 'yuedan',
                'code' => 'JOR',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 1,
                'cn_name' => '越南',
                'en_name' => 'Vietnam',
                'ping_name' => 'yuenan',
                'code' => 'VNM',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '赞比亚',
                'en_name' => 'Zambia',
                'ping_name' => 'zanbiya',
                'code' => 'ZMB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 2,
                'cn_name' => '泽西岛',
                'en_name' => 'Jersey',
                'ping_name' => 'zexidao',
                'code' => 'JEY',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '乍得',
                'en_name' => 'Chad',
                'ping_name' => 'zhade',
                'code' => 'TCD',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '直布罗陀',
                'en_name' => 'Gibraltar',
                'ping_name' => 'zhibuluotuo',
                'code' => 'GIB',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 4,
                'cn_name' => '智利',
                'en_name' => 'Chile',
                'ping_name' => 'zhili',
                'code' => 'CHL',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'continent_id' => 6,
                'cn_name' => '中非共和国',
                'en_name' => 'Central African Republic',
                'ping_name' => 'zhongfeigongheguo',
                'code' => 'CAF',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "澳大利亚",
                "en_name"=> "Australia",
                "ping_name"=> "aodaliya",
                "code"=> "AUS",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "巴布亚新几内亚",
                "en_name"=> "Papua New Guinea",
                "ping_name"=> "babuyaxinjineiya",
                "code"=> "PNG",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "法属波利尼西亚",
                "en_name"=> "Frech Polynesia",
                "ping_name"=> "fashubolinixiya",
                "code"=> "PYF",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "斐济",
                "en_name"=> "Fiji Islands",
                "ping_name"=> "ji",
                "code"=> "FJI",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "关岛",
                "en_name"=> "Guam",
                "ping_name"=> "guandao",
                "code"=> "GUM",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "赫德和麦克唐纳群岛",
                "en_name"=> "Heard Island and McDonald Islands",
                "ping_name"=> "hedehemaiketangnaqundao",
                "code"=> "HMD",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "基里巴斯",
                "en_name"=> "Kiribati",
                "ping_name"=> "jilibasi",
                "code"=> "KIR",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "科科斯群岛",
                "en_name"=> "Cocos(Keeling)Islands",
                "ping_name"=> "kekesiqundao",
                "code"=> "CCK",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "库克群岛",
                "en_name"=> "Cook Islands",
                "ping_name"=> "kukequndao",
                "code"=> "COK",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "马绍尔群岛",
                "en_name"=> "Marshall Islands",
                "ping_name"=> "mashaoerqundao",
                "code"=> "MHL",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "美属萨摩亚",
                "en_name"=> "American Samoa",
                "ping_name"=> "meishusamoya",
                "code"=> "ASM",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "密克罗尼西亚",
                "en_name"=> "Micronesia",
                "ping_name"=> "mikeluonixiya",
                "code"=> "FSM",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "瑙鲁",
                "en_name"=> "Nauru",
                "ping_name"=> "lu",
                "code"=> "NRU",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "纽埃",
                "en_name"=> "Niue",
                "ping_name"=> "niuai",
                "code"=> "NIU",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "帕劳群岛",
                "en_name"=> "Palau",
                "ping_name"=> "palaoqundao",
                "code"=> "PLW",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "皮特凯恩",
                "en_name"=> "Pitcairn Islands",
                "ping_name"=> "pitekaien",
                "code"=> "PCN",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "萨摩亚",
                "en_name"=> "Samoa",
                "ping_name"=> "samoya",
                "code"=> "WSM",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "圣诞岛",
                "en_name"=> "Christmas Island",
                "ping_name"=> "shengdandao",
                "code"=> "CXR",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "所罗门群岛",
                "en_name"=> "Solomon Islands",
                "ping_name"=> "suoluomenqundao",
                "code"=> "SLB",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "汤加",
                "en_name"=> "Tonga",
                "ping_name"=> "tangjia",
                "code"=> "TON",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "图瓦卢",
                "en_name"=> "Tuvalu",
                "ping_name"=> "tuwalu",
                "code"=> "TUV",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "托克劳",
                "en_name"=> "Tokelau",
                "ping_name"=> "tuokelao",
                "code"=> "TKL",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "瓦利斯和福图纳",
                "en_name"=> "Wallis and Futuna",
                "ping_name"=> "walisihefutuna",
                "code"=> "WLF",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "瓦努阿图",
                "en_name"=> "Vanuatu",
                "ping_name"=> "wanuatu",
                "code"=> "VUT",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "新喀里多尼亚",
                "en_name"=> "New Caledonia",
                "ping_name"=> "xinkaliduoniya",
                "code"=> "NCL",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                "continent_id"=> 5,
                "cn_name"=> "新西兰",
                "en_name"=> "New Zealand",
                "ping_name"=> "xinxilan",
                "code"=> "NZL",
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]
        ];
        Country::query()->insert($countries);
    }
}
