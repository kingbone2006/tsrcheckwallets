<?php
/**
 * @package Cấu hình Thẻ siêu rẻ
 *
 * @author Vinh Developer | Ske Software | Phạm Vinh ID
 *
 * @see Lưu ý: Token captcha phải được lấy chính xác thì mới có thể đăng nhập được vào tài khoản ! Cách lấy xin liên hệ Zalo: 0931562864 - Vinh Developer hoặc xem trong phần Hướng dẫn
 *
 * @method Nếu lỗi đăng nhập: Mã xác nhận không chính xác thì token captcha bị sai và phải lấy lại
 */
namespace SkeSoft;
class Config {
	// Ghi lại nhật ký hoạt động (true nếu có hoặc false nếu không)
	public const LOGGING = true;

	// Cài đặt tài khoản (bắt buộc)
	public const TSR_USERNAME = 'tài khoản tsr'; // Username tài khoản thẻ siêu rẻ
	public const TSR_PASSWORD = 'mật khẩu tsr'; // Mật khẩu thẻ siêu rẻ

	// Tự động xóa file lưu cookie (true nếu bật hoặc false nếu tắt, khuyến khích nên để false)
	public const AUTO_DELETE_COOKIE = false; // Tính năng này sẽ lưu cookie tài khoản trong 1 thời gian dài để đăng nhập không cần captcha token, nếu bạn đổi tài khoản tsr bắt buộc phải xóa cookie. Cách xóa cookie xem trong hướng dẫn.

	// Token captcha ở thẻ siêu rẻ (bắt buộc, cách lấy token ở hướng dẫn)
	public const G_CAPTCHA_CODE = 'điền token vào đây';
}