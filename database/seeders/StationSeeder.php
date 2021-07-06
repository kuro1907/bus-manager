<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            [
            'name' => 'Bến xe Đà Nẵng',
            'routes_list' => ' 1-01 2-01 3-03 4-03 7-06 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 121 Tôn Đức Thắng',
            'routes_list' => ' 1-01 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 721 Điện Biên Phủ',
            'routes_list' => ' 1-01 3-03 7-06 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 559 Điện Biên Phủ',
            'routes_list' => ' 1-01 3-03 7-06 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 407 Điện Biên Phủ',
            'routes_list' => ' 1-01 3-03 7-06 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 39 Hà Huy Tập',
            'routes_list' => ' 1-01 7-06 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 935 Nguyễn Tất Thành',
            'routes_list' => ' 1-01 3-03 7-06 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 714 Nguyễn Tất Thành',
            'routes_list' => ' 1-01 3-03 7-06 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 617 Nguyễn Tất Thành',
            'routes_list' => ' 1-01 3-03 7-06 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 8 Ông Ích Khiêm',
            'routes_list' => ' 1-01 3-03 7-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 40 Ông Ích Khiêm',
            'routes_list' => ' 1-01 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 144 Ông Ích Khiêm',
            'routes_list' => ' 1-01 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 162 Ông Ích Khiêm',
            'routes_list' => ' 1-01 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 155 Lê Duẩn',
            'routes_list' => ' 1-01 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 68 Chi Lăng',
            'routes_list' => ' 1-01 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Sở Y Tế, Hùng Vương',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước Công viên Hùng Vương',
            'routes_list' => ' 1-01 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện SN 151 Trần Phú',
            'routes_list' => ' 1-01 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 270 Trần Phú (Tường rào UBND quận Hải Châu)',
            'routes_list' => ' 1-01 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 308 Trưng Nữ Vương',
            'routes_list' => ' 1-01 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 230 Trưng Nữ Vương',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 60 Núi Thành',
            'routes_list' => ' 1-01 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Cầu Trần Thị Lý',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 38 Ngũ Hành Sơn',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện Trường Đại học Kinh tế',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 240 Ngũ Hành Sơn',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 310A Ngũ Hành Sơn',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 370 Ngũ Hành Sơn',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 40 Lê Văn Hiến',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 160 Lê Văn Hiến',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 256 Lê Văn Hiến',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 376 Lê Văn Hiến',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 470A Lê Văn Hiến',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 542 Lê Văn Hiến',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 618 Lê Văn Hiến',
            'routes_list' => ' 1-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 509 Lê Văn Hiến',
            'routes_list' => ' 1-01 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 415 Lê Văn Hiến',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 307 Lê Văn Hiến',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện UBND quận Ngũ Hành Sơn',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 380 Lê Văn Hiến',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 270 Lê Văn Hiến',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 51 Lê Văn Hiến',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 50 Lê Văn Hiến',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 175 Ngũ Hành Sơn',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 133 Ngũ Hành Sơn',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước Trường Trung cấp nghề số 5',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước Trường Đại học Kinh tế',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 29 Ngũ Hành Sơn',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 2 Duy Tân',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 21 Núi Thành',
            'routes_list' => ' 2-01 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 125 Trưng Nữ Vương',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Bảo tàng điêu khắc Chăm',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 256 Bạch Đằng',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện số nhà 122 Bạch Đằng (cổng chợ Hàn)',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước Siêu Thị Điện Máy Vương Quốc Hương',
            'routes_list' => ' 2-01',
            'status' => '1'
            ],
            [
            'name' => 'Trước 192 Hùng Vương',
            'routes_list' => ' 2-01 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 88 Chi Lăng',
            'routes_list' => ' 2-01 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 166 Lê Duẩn',
            'routes_list' => ' 2-01 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 79 Ông Ích Khiêm',
            'routes_list' => ' 2-01 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 36 Ông Ích Khiêm',
            'routes_list' => ' 2-01 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 617 Nguyễn Tất Thành',
            'routes_list' => ' 2-01 4-03 8-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 735 Nguyễn Tất Thành',
            'routes_list' => ' 2-01 4-03 8-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 921 Nguyễn Tất Thành',
            'routes_list' => ' 2-01 4-03 8-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 60 Hà Huy Tập',
            'routes_list' => ' 2-01 8-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Ngã tư Hà Huy Tập - Điện Biên Phủ',
            'routes_list' => ' 2-01 8-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 416 Điện Biên Phủ',
            'routes_list' => ' 2-01 4-03 8-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 570 Điện Biên Phủ',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 734 Điện Biên Phủ',
            'routes_list' => ' 2-01 4-03 8-06 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 122 Tôn Đức Thắng',
            'routes_list' => ' 2-01 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trạm Biến Áp P. Xuân Hà Nguyễn Đức Trung',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 38 Ngô Gia Tự',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 522 Ông Ích Khiêm',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 310-312 Hoàng Diệu',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 233 Trưng Nữ Vương',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 161 Núi Thành (Tường rào QK5)',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 382 Núi Thành',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 584 Núi Thành',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện Metro, Cách Mạng Tháng 8',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 52 Cách Mạng Tháng 8',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 180 Cách Mạng Tháng 8',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 290 Cách Mạng Tháng 8',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 496 Cách Mạng Tháng 8',
            'routes_list' => ' 3-03 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Km19+070 QL.14B (phía Tây cầu vượt Hòa Cầm)',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Km21+250 QL.14B (Đối diện Trường Quân sự QK5)',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'QL.14B (cũ) (gần ngã 3 QL14B (cũ) - ĐT604)',
            'routes_list' => ' 3-03',
            'status' => '1'
            ],
            [
            'name' => 'Khu vực đường vào Gò Cà',
            'routes_list' => ' 3-03 4-03',
            'status' => '1'
            ],
            [
            'name' => 'QL.14B (cũ) (Đối diện Trường TH Lâm Quang Thự)',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Km21+250 QL.14B (Tường rào Trường Quân sự QK5)',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 9-11 Trường Sơn, Km19+070 QL.14B',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 419 Cách Mạng Tháng 8',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 307 Cách Mạng Tháng 8',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 151 Cách Mạng Tháng 8',
            'routes_list' => ' 4-03 6-04 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Bệnh Viện Tâm Trí',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Metro, Cách Mạng Tháng 8',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 569 Núi Thành',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 376-378 Núi Thành',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 149 Núi Thành (Trường THCS Tây Sơn)',
            'routes_list' => ' 4-03 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 315 Hoàng Diệu',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 199 Hoàng Diệu (UBND phường Nam Dương)',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 417-419 Ông Ích Khiêm',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Chợ Cồn Hùng Vương',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 29 Ngô Gia Tự',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Trước 716 Trần Cao Vân',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện Trạm Biến Áp P. Xuân Hà Nguyễn Đức Trung',
            'routes_list' => ' 4-03',
            'status' => '1'
            ],
            [
            'name' => 'Bãi đỗ xe Đà Nẵng - Tam Kỳ',
            'routes_list' => ' 5-04 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 29 Nguyễn Tất Thành',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 159 đường 3 tháng 2',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 49 đường 3 tháng 2',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 20 Đống Đa',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 106 Đống Đa',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 240 Đống Đa',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 8 Nguyễn Thị Minh Khai',
            'routes_list' => ' 5-04 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 156 Nguyễn Thị Minh Khai',
            'routes_list' => ' 5-04 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 106 Phan Châu Trinh',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 174 Phan Châu Trinh',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Chùa Phước Ninh',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 155 Nguyễn Văn Linh',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 248 Nguyễn Văn Linh',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 220 Nguyễn Tri Phương',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 79 Nguyễn Hữu Thọ',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 38 Nguyễn Hữu Thọ',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 128 Nguyễn Hữu Thọ',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 300 Nguyễn Hữu Thọ',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Viettrolimex',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 676 Nguyễn Hữu Thọ',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 176-178 Cách Mạng Tháng 8',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 58 Ông Ích Đường',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 164-166 Ông Ích Đường',
            'routes_list' => '',
            'status' => '1'
            ],
            [
            'name' => 'Trước 50 Phạm Hùng',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 182 Phạm Hùng',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Lô 2 Cẩm Lệ',
            'routes_list' => ' 5-04',
            'status' => '1'
            ],
            [
            'name' => 'Trạm CSGT cửa ô Hòa Phước',
            'routes_list' => ' 5-04 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Nghĩa trang liệt sĩ Hòa Phước',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Trường tiểu học Nguyễn Văn Linh',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 121 Phạm Hùng',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Bãi đỗ xe công ty Mai Linh',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 297 Ông Ích Đường',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 171 Ông Ích Đường',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước công ty Nissan Đà Nẵng',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 513-515 Nguyễn Hữu Thọ',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 325-327 Nguyễn Hữu Thọ',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Tường rào trường Lý Công Uẩn',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 113 Nguyễn Hữu Thọ',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 93 Nguyễn Hữu Thọ',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 11-13 Nguyễn Tri Phương',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Bệnh viện Hoàn Mỹ',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 131 Hoàng Diệu',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 239 Nguyễn Chí Thanh',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Siêu Thị Điện máy Quốc Hương',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 163-165 Đống Đa',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 75 Đống Đa',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 09 Đống Đa',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 24 đường 3 tháng 2',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước 192 đường 3 tháng 2',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện SN 45 Nguyễn Tất Thành',
            'routes_list' => ' 6-04',
            'status' => '1'
            ],
            [
            'name' => 'Trước Chợ Cồn đường Hùng Vương',
            'routes_list' => ' 7-06 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 331 Hùng Vương',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Hồ Thạc Gián đường Hàm Nghi',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Khu Chung cư, Lê Đình Lý',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 155 Lê Đình Lý',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Cây Xăng Nguyễn Tri Phương',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 335 Nguyễn Tri Phương',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Bảo Tàng Quân Khu 5',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Trường Chinh giao đường sắt Km 799+530',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Trường Chinh giao đường sắt Km 800+125',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Km 935 Quốc lộ 1A (Vỉa hè trái)',
            'routes_list' => ' 7-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Trạm xăng Hòa Hiệp',
            'routes_list' => ' 7-06 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Công ty thép Pomina',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Km 935 Quốc lộ 1A (Vỉa hè phải)',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước TT Giáo dục thường xuyên Quận Cẩm Lệ',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện Trường Chinh giao đường sắt Km 799+530',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 28 Duy Tân (bên cạnh quán Trần)',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 518 Nguyễn Tri Phương',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước 273 Nguyễn Tri Phương',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Trước Hồ Vĩnh Trung, đường Hàm Nghi',
            'routes_list' => ' 8-06',
            'status' => '1'
            ],
            [
            'name' => 'Ngã ba Trường Sa - Nguyễn Phan Vinh',
            'routes_list' => ' 9-09 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 04 Nguyễn Phan Vinh',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 35 đường Ngô Quyền',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 118 Ngô Quyền',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 314 Ngô Quyền',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 442 Ngô Quyền',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 570 Ngô Quyền',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 692 Ngô Quyền',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước Trường tiểu học Tiểu La, 862 Ngô Quyền',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 735 Ngô Quyền, Trường mầm non ABC',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 757 Ngô Quyền, TTTM Vincom',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 926 Ngô Quyền, Công ty điện lực Sơn Trà',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Phía Đông cầu Rồng, hướng lên cầu',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện Đài Truyền Hình Đà Nẵng',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 122 Bạch Đằng',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện Bưu điện Bạch Đằng, gần cầu Sông Hàn',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước Sân tennis Bạch Đằng',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 12 Lý Tự Trọng',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 144 Trường Chinh',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 794 Trường Chinh',
            'routes_list' => ' 9-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 1016 Trường Chinh',
            'routes_list' => ' 9-09 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 683-685 Trường Chinh',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 794 Trường Chinh',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Đối diện 314 Trường Chinh',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 147 Lý Tự Trọng',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước Đường dẫn phía Đông cầu Rồng',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 851 Ngô Quyền, Công ty điện lực Sơn Trà',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 739 Ngô Quyền',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 575 Ngô Quyền',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 463 Ngô Quyền',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 369 Ngô Quyền',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 331-333 Ngô Quyền',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 253 Ngô Quyền',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 111 Ngô Quyền',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước Ngô Quyền (Công ty Huy Đăng)',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 03 Nguyễn Phan Vinh (Giáo xứ Sơn Trà)',
            'routes_list' => ' 10-09',
            'status' => '1'
            ],
            [
            'name' => 'Trước 191 Lê Đình Lý',
            'routes_list' => ' 8-06',
            'status' => '1'
            ]
        ];
        foreach ($stations as $station) {
            DB::table('stations')->insert([
                'name' => $station['name'],
                'status' => $station['status']
            ]);
        }
    }
}
