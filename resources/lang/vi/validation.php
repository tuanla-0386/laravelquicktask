<?php

return [
    'accepted' => 'Trường :attribute phải được chấp nhận.',
    'accepted_if' => 'Trường :attribute phải được chấp nhận khi :other là :value.',
    'active_url' => 'Trường :attribute không phải là một URL hợp lệ.',
    'after' => 'Trường :attribute phải là một ngày sau ngày :date.',
    'after_or_equal' => 'Trường :attribute phải là ngày sau hoặc bằng :date.',
    'alpha' => 'Trường :attribute chỉ có thể chứa chữ cái.',
    'alpha_dash' => 'Trường :attribute chỉ có thể chứa chữ cái, số, dấu gạch ngang và gạch dưới.',
    'alpha_num' => 'Trường :attribute chỉ có thể chứa chữ cái và số.',
    'array' => 'Trường :attribute phải là một mảng.',
    'before' => 'Trường :attribute phải là một ngày trước ngày :date.',
    'before_or_equal' => 'Trường :attribute phải là ngày trước hoặc bằng :date.',
    'between' => [
        'numeric' => 'Trường :attribute phải nằm trong khoảng :min và :max.',
        'file' => 'Trường :attribute phải nằm trong khoảng :min và :max kilobytes.',
        'string' => 'Trường :attribute phải nằm trong khoảng :min và :max ký tự.',
        'array' => 'Trường :attribute phải có từ :min đến :max phần tử.',
    ],
    'boolean' => 'Trường :attribute phải là true hoặc false.',
    'confirmed' => 'Giá trị xác nhận của trường :attribute không khớp.',
    'current_password' => 'Mật khẩu hiện tại không chính xác.',
    'date' => 'Trường :attribute không phải là ngày hợp lệ.',
    'date_equals' => 'Trường :attribute phải là một ngày bằng :date.',
    'date_format' => 'Trường :attribute không khớp với định dạng :format.',
    'declined' => 'Trường :attribute phải bị từ chối.',
    'declined_if' => 'Trường :attribute phải bị từ chối khi :other là :value.',
    'different' => 'Trường :attribute và :other phải khác nhau.',
    'digits' => 'Trường :attribute phải có :digits chữ số.',
    'digits_between' => 'Trường :attribute phải có độ dài từ :min đến :max chữ số.',
    'dimensions' => 'Trường :attribute có kích thước không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'email' => 'Trường :attribute phải là một địa chỉ email hợp lệ.',
    'ends_with' => 'Trường :attribute phải kết thúc bằng một trong những giá trị sau: :values.',
    'enum' => 'Giá trị đã chọn cho trường :attribute không hợp lệ.',
    'exists' => 'Giá trị đã chọn cho trường :attribute không hợp lệ.',
    'file' => 'Trường :attribute phải là một tệp.',
    'filled' => 'Trường :attribute không được bỏ trống.',
    'gt' => [
        'numeric' => 'Trường :attribute phải lớn hơn :value.',
        'file' => 'Trường :attribute phải lớn hơn :value kilobytes.',
        'string' => 'Trường :attribute phải dài hơn :value ký tự.',
        'array' => 'Trường :attribute phải chứa hơn :value phần tử.',
    ],
    'gte' => [
        'numeric' => 'Trường :attribute phải lớn hơn hoặc bằng :value.',
        'file' => 'Trường :attribute phải lớn hơn hoặc bằng :value kilobytes.',
        'string' => 'Trường :attribute phải dài hơn hoặc bằng :value ký tự.',
        'array' => 'Trường :attribute phải chứa :value phần tử hoặc nhiều hơn.',
    ],
    'image' => 'Trường :attribute phải là một hình ảnh.',
    'in' => 'Trường :attribute được chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => 'Trường :attribute phải là một số nguyên.',
    'ip' => 'Trường :attribute phải là địa chỉ IP hợp lệ.',
    'ipv4' => 'Trường :attribute phải là địa chỉ IPv4 hợp lệ.',
    'ipv6' => 'Trường :attribute phải là địa chỉ IPv6 hợp lệ.',
    'json' => 'Trường :attribute phải là một chuỗi JSON hợp lệ.',
    'lt' => [
        'numeric' => 'Trường :attribute phải nhỏ hơn :value.',
        'file' => 'Trường :attribute phải nhỏ hơn :value kilobytes.',
        'string' => 'Trường :attribute phải ngắn hơn :value ký tự.',
        'array' => 'Trường :attribute phải chứa ít hơn :value phần tử.',
    ],
    'lte' => [
        'numeric' => 'Trường :attribute phải nhỏ hơn hoặc bằng :value.',
        'file' => 'Trường :attribute phải nhỏ hơn hoặc bằng :value kilobytes.',
        'string' => 'Trường :attribute phải ngắn hơn hoặc bằng :value ký tự.',
        'array' => 'Trường :attribute không được chứa nhiều hơn :value phần tử.',
    ],
    'mac_address' => 'Trường :attribute phải là địa chỉ MAC hợp lệ.',
    'max' => [
        'numeric' => 'Trường :attribute không được lớn hơn :max.',
        'file' => 'Trường :attribute không được lớn hơn :max kilobytes.',
        'string' => 'Trường :attribute không được dài hơn :max ký tự.',
        'array' => 'Trường :attribute không được chứa nhiều hơn :max phần tử.',
    ],
    'mimes' => 'Trường :attribute phải là một tập tin có định dạng: :values.',
    'mimetypes' => 'Trường :attribute phải là một tập tin có định dạng: :values.',
    'min' => [
        'numeric' => 'Trường :attribute phải tối thiểu là :min.',
        'file' => 'Trường :attribute phải tối thiểu là :min kilobytes.',
        'string' => 'Trường :attribute phải dài tối thiểu :min ký tự.',
        'array' => 'Trường :attribute phải chứa ít nhất :min phần tử.',
    ],
    'multiple_of' => 'Trường :attribute phải là một bội số của :value.',
    'not_in' => 'Trường :attribute được chọn không hợp lệ.',
    'not_regex' => 'Định dạng của trường :attribute không hợp lệ.',
    'numeric' => 'Trường :attribute phải là một số.',
    'password' => 'Mật khẩu không chính xác.',
    'present' => 'Trường :attribute phải có giá trị.',
    'prohibited' => 'Trường :attribute bị cấm.',
    'prohibited_if' => 'Trường :attribute bị cấm khi :other là :value.',
    'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other là một trong các giá trị: :values.',
    'prohibits' => 'Trường :attribute cấm :other tồn tại.',
    'regex' => 'Định dạng :attribute không hợp lệ.',
    'required' => 'Trường :attribute là bắt buộc.',
    'required_array_keys' => 'Trường :attribute phải chứa các mục cho: :values.',
    'required_if' => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other là một trong các giá trị: :values.',
    'required_with' => 'Trường :attribute là bắt buộc khi :values có giá trị.',
    'required_with_all' => 'Trường :attribute là bắt buộc khi :values có giá trị.',
    'required_without' => 'Trường :attribute là bắt buộc khi :values không có giá trị.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có giá trị trong :values.',
    'same' => 'Trường :attribute và :other phải giống nhau.',
    'size' => [
        'numeric' => 'Trường :attribute phải là :size.',
        'file' => 'Trường :attribute phải có kích thước :size kilobytes.',
        'string' => 'Trường :attribute phải có :size ký tự.',
        'array' => 'Trường :attribute phải chứa :size phần tử.',
    ],
    'starts_with' => 'Trường :attribute phải bắt đầu bằng một trong các giá trị sau: :values.',
    'string' => 'Trường :attribute phải là một chuỗi.',
    'timezone' => 'Trường :attribute phải là múi giờ hợp lệ.',
    'unique' => 'Trường :attribute đã được sử dụng.',
    'uploaded' => 'Không thể tải lên trường :attribute.',
    'url' => 'Trường :attribute phải là một đường dẫn URL hợp lệ.',
    'uuid' => 'Trường :attribute phải là một UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Ngôn ngữ dịch đoạn mã thông báo lỗi xác thực tùy chỉnh
    |--------------------------------------------------------------------------
    |
    | Ở đây, bạn có thể chỉ định các thông báo lỗi xác thực tùy chỉnh cho các thuộc tính bằng cách sử dụng
    | quy ước "attribute.rule" để đặt tên các dòng ngôn ngữ. Điều này giúp bạn nhanh chóng
    | chỉ định một thông báo lỗi ngôn ngữ tùy chỉnh cụ thể cho một quy tắc thuộc tính cụ thể.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Ngôn ngữ tùy chỉnh cho các thuộc tính xác thực
    |--------------------------------------------------------------------------
    |
    | Các dòng ngôn ngữ dưới đây được sử dụng để thay thế giá trị đại diện cho thuộc tính
    | bằng một cái gì đó dễ đọc hơn như "Địa chỉ Email" thay vì "email". Điều này giúp
    | chúng ta làm thông báo trở nên rõ ràng hơn.
    |
    */

    'attributes' => [],

];
