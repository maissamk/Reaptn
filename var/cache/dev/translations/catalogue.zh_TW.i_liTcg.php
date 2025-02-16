<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_TW', array (
  'validators' => 
  array (
    'This value should be false.' => '這個數值應為 false。',
    'This value should be true.' => '這個數值應為 true。',
    'This value should be of type {{ type }}.' => '這個數值的類型應為 {{ type }}。',
    'This value should be blank.' => '這個數值應該留白。',
    'The value you selected is not a valid choice.' => '選取的值不是有效的選項。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '至少需要選 {{ limit }} 項。|至少需要選 {{ limit }} 項。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '至多只能選 {{ limit }} 項。|至多只能選 {{ limit }} 項。',
    'One or more of the given values is invalid.' => '一或多個填入的數值無效。',
    'This field was not expected.' => '這個欄位不在預期之內。',
    'This field is missing.' => '缺少這個欄位。',
    'This value is not a valid date.' => '這個數值不是有效的日期。',
    'This value is not a valid datetime.' => '這個數值不是有效的日期時間組合。',
    'This value is not a valid email address.' => '這個數值不是有效的電子郵件格式。',
    'The file could not be found.' => '找不到這個檔案。',
    'The file is not readable.' => '無法讀取這個檔案。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '這個檔案過大（{{ size }} {{ suffix }}）。允許的大小上限是 {{ limit }} {{ suffix }}。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '這個檔案的 MIME 類型無效（{{ type }}）。允許的 MIME 類型有 {{ types }}。',
    'This value should be {{ limit }} or less.' => '這個數值必須小於等於 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '這個數值過長。最多只能有 {{ limit }} 個字元。|這個數值過長。最多只能有 {{ limit }} 個字元。',
    'This value should be {{ limit }} or more.' => '這個數值必須大於等於 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '這個數值過短。最少要有 {{ limit }} 個字元。|這個數值過短。最少要有 {{ limit }} 個字元。',
    'This value should not be blank.' => '這個數值不允許留白。',
    'This value should not be null.' => '這個數值不能為空值（null）。',
    'This value should be null.' => '這個數值應為空值（null）。',
    'This value is not valid.' => '這個數值無效。',
    'This value is not a valid time.' => '這個數值不是有效的時間。',
    'This value is not a valid URL.' => '這個數值不是 URL 格式。',
    'The two values should be equal.' => '這兩個數值應該相同。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '這個檔案過大。允許的大小上限為 {{ limit }} {{ suffix }}。',
    'The file is too large.' => '這個檔案過大。',
    'The file could not be uploaded.' => '無法上傳檔案。',
    'This value should be a valid number.' => '這個數值不是有效的數字。',
    'This file is not a valid image.' => '這個檔案不是有效的影像。',
    'This is not a valid IP address.' => '這個數值不是有效的 IP 地址。',
    'This value is not a valid language.' => '這個數值不是有效的語言。',
    'This value is not a valid locale.' => '這個數值不是有效的地區。',
    'This value is not a valid country.' => '這個數值不是有效的國家。',
    'This value is already used.' => '已經用過這個數值。',
    'The size of the image could not be detected.' => '無法偵測這個影像的大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '影像過寬（{{ width }}px）。允許的寬度上限是 {{ max_width }}px。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '影像過窄（{{ width }}px）。允許的寬度下限是 {{ max_width }}px。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '影像過長（{{ height }}px）。允許的長度上限是 {{ max_height }}px。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '影像過短（{{ height }}px）。允許的長度下限是 {{ max_height }}px。',
    'This value should be the user\'s current password.' => '這個數值應為使用者目前使用的密碼。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '這個數值應剛好為 {{ limit }} 個字元長。|這個數值應剛好為 {{ limit }} 個字元長。',
    'The file was only partially uploaded.' => '檔案只上傳了一部分。',
    'No file was uploaded.' => '未上傳檔案。',
    'No temporary folder was configured in php.ini.' => '未在 php.ini 設定暫存資料夾，或者是暫存資料夾不存在。',
    'Cannot write temporary file to disk.' => '無法將暫存檔寫入磁碟。',
    'A PHP extension caused the upload to fail.' => '有個 PHP 擴充套件導致上傳失敗。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '這個集合應該至少有 {{ limit }} 個元素。|這個集合應該至少有 {{ limit }} 個元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '這個集合最多只能有 {{ limit }} 個元素。|這個集合最多只能有 {{ limit }} 個元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '這個集合只能有剛好 {{ limit }} 個元素。|這個集合只能有剛好 {{ limit }} 個元素。',
    'Invalid card number.' => '卡號無效。',
    'Unsupported card type or invalid card number.' => '不支援這個卡片類型，或卡號不正確。',
    'This is not a valid International Bank Account Number (IBAN).' => '這個數值的格式不是國際銀行帳戶號碼（IBAN）。',
    'This value is not a valid ISBN-10.' => '這個數值的格式不是 ISBN-10。',
    'This value is not a valid ISBN-13.' => '這個數值的格式不是 ISBN-13。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '這個數值的格式不是 ISBN-10 或 ISBN-13。',
    'This value is not a valid ISSN.' => '這個數值的格式不是 ISSN。',
    'This value is not a valid currency.' => '這個數值不是有效的貨幣。',
    'This value should be equal to {{ compared_value }}.' => '這個數值應等於 {{ compared_value }}。',
    'This value should be greater than {{ compared_value }}.' => '這個數值應大於 {{ compared_value }}。',
    'This value should be greater than or equal to {{ compared_value }}.' => '這個數值應大於等於 {{ compared_value }}。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '這個數值應等於 {{ compared_value_type }} {{ compared_value }}。',
    'This value should be less than {{ compared_value }}.' => '這個數值應小於 {{ compared_value }}。',
    'This value should be less than or equal to {{ compared_value }}.' => '這個數值應小於等於 {{ compared_value }}。',
    'This value should not be equal to {{ compared_value }}.' => '這個數值不應等於 {{ compared_value }}。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '這個數值不應等於 {{ compared_value_type }} {{ compared_value }}。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '影像的比例過大（{{ ratio }}）。允許的最大比例是 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '影像的比例過小（{{ ratio }}）。允許的最小比例是 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '影像為正方形（{{ width }}x{{ height }}px）。不允許使用正方形影像。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '影像為橫向（{{ width }}x{{ height }}px）。不允許使用橫向影像。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '影像為縱向（{{ width }}x{{ height }}px）。不允許使用縱向影像。',
    'An empty file is not allowed.' => '不允許空白檔案。',
    'The host could not be resolved.' => '無法解析主機。',
    'This value does not match the expected {{ charset }} charset.' => '這個數值不符合預期的 {{ charset }} 字元集。',
    'This is not a valid Business Identifier Code (BIC).' => '這個數值不是有效的商業識別碼（BIC）。',
    'Error' => '錯誤',
    'This is not a valid UUID.' => '這個數值不是有效的 UUID。',
    'This value should be a multiple of {{ compared_value }}.' => '這個數值應為 {{ compared_value }} 的倍數。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => '這個商業識別碼（BIC）與 IBAN {{ iban }} 沒有關聯。',
    'This value should be valid JSON.' => '這個數值應為有效的 JSON。',
    'This collection should contain only unique elements.' => '這個集合不允許有重複元素。',
    'This value should be positive.' => '這個數值應為正數。',
    'This value should be either positive or zero.' => '這個數值應為正數或 0。',
    'This value should be negative.' => '這個數值應為負數。',
    'This value should be either negative or zero.' => '這個數值應為負數或 0。',
    'This value is not a valid timezone.' => '這個數值不是有效的時區。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => '這個密碼已在資料洩露中曝光，不應再使用。請使用其他密碼。',
    'This value should be between {{ min }} and {{ max }}.' => '這個數值應介於 {{ min }} 和 {{ max }} 之間。',
    'This value is not a valid hostname.' => '這個數值不是有效的主機名稱。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '這個集合中的元素數量應為 {{ compared_value }} 的倍數。',
    'This value should satisfy at least one of the following constraints:' => '這個數值應滿足以下至少一項限制：',
    'Each element of this collection should satisfy its own set of constraints.' => '這個集合中的每個元素應滿足其自身的約束條件。',
    'This value is not a valid International Securities Identification Number (ISIN).' => '這個數值不是有效的國際證券識別號碼（ISIN）。',
    'This value should be a valid expression.' => '這個數值應為有效的表達式。',
    'This value is not a valid CSS color.' => '這個數值不是有效的 CSS 顏色。',
    'This value is not a valid CIDR notation.' => '這個數值不是有效的 CIDR 表示法。',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => '網路遮罩的值應介於 {{ min }} 和 {{ max }} 之間。',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => '檔案名稱過長。應最多有 {{ filename_max_length }} 個字元。|檔案名稱過長。應最多有 {{ filename_max_length }} 個字元。',
    'The password strength is too low. Please use a stronger password.' => '密碼強度太低。請使用更強的密碼。',
    'This value contains characters that are not allowed by the current restriction-level.' => '這個數值包含目前限制級別不允許的字元。',
    'Using invisible characters is not allowed.' => '不允許使用隱形字元。',
    'Mixing numbers from different scripts is not allowed.' => '不允許混合來自不同文字的數字。',
    'Using hidden overlay characters is not allowed.' => '不允許使用隱藏的覆蓋字元。',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => '檔案的副檔名無效（{{ extension }}）。允許的副檔名有 {{ extensions }}。',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => '偵測到的字元編碼無效（{{ detected }}）。允許的編碼有 {{ encodings }}。',
    'This value is not a valid MAC address.' => '這個數值不是有效的 MAC 位址。',
    'This URL is missing a top-level domain.' => '這個 URL 缺少頂級域名。',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => '這個數值過短。應至少包含 1 個單字。|這個數值過短。應至少包含 {{ min }} 個單字。',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => '這個數值過長。應包含 1 個單字。|這個數值過長。應最多包含 {{ max }} 個單字。',
    'This value does not represent a valid week in the ISO 8601 format.' => '這個數值不符合 ISO 8601 格式的有效週。',
    'This value is not a valid week.' => '這個數值不是有效的週。',
    'This value should not be before week "{{ min }}".' => '這個數值不應早於第「{{ min }}」週。',
    'This value should not be after week "{{ max }}".' => '這個數值不應晚於第「{{ max }}」週。',
    'This value is not a valid slug.' => '這個數值不是有效的 slug。',
    'This form should not contain extra fields.' => '此表單不應包含其他欄位。',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上傳的檔案過大。請嘗試上傳較小的檔案。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token 無效。請重新提交表單。',
    'This value is not a valid HTML5 color.' => '這個數值不是有效的 HTML5 顏色。',
    'Please enter a valid birthdate.' => '請輸入有效的出生日期。',
    'The selected choice is invalid.' => '選取的選項無效。',
    'The collection is invalid.' => '這個集合無效。',
    'Please select a valid color.' => '請選擇有效的顏色。',
    'Please select a valid country.' => '請選擇有效的國家。',
    'Please select a valid currency.' => '請選擇有效的貨幣。',
    'Please choose a valid date interval.' => '請選擇有效的日期區間。',
    'Please enter a valid date and time.' => '請輸入有效的日期和時間。',
    'Please enter a valid date.' => '請輸入有效的日期。',
    'Please select a valid file.' => '請選擇有效的檔案。',
    'The hidden field is invalid.' => '隱藏欄位無效。',
    'Please enter an integer.' => '請輸入整數。',
    'Please select a valid language.' => '請選擇有效的語言。',
    'Please select a valid locale.' => '請選擇有效的語系。',
    'Please enter a valid money amount.' => '請輸入有效的金額。',
    'Please enter a number.' => '請輸入數字。',
    'The password is invalid.' => '密碼無效。',
    'Please enter a percentage value.' => '請輸入百分比數值。',
    'The values do not match.' => '數值不相符。',
    'Please enter a valid time.' => '請輸入有效的時間。',
    'Please select a valid timezone.' => '請選擇有效的時區。',
    'Please enter a valid URL.' => '請輸入有效的 URL。',
    'Please enter a valid search term.' => '請輸入有效的搜尋關鍵字。',
    'Please provide a valid phone number.' => '請提供有效的電話號碼。',
    'The checkbox has an invalid value.' => '核取方塊上有無效的值。',
    'Please enter a valid email address.' => '請輸入有效的電子郵件地址。',
    'Please select a valid option.' => '請選擇有效的選項。',
    'Please select a valid range.' => '請選擇有效的範圍。',
    'Please enter a valid week.' => '請輸入有效的星期。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份驗證發生異常。',
    'Authentication credentials could not be found.' => '沒有找到身份驗證的憑證。',
    'Authentication request could not be processed due to a system problem.' => '由於系統故障，身份驗證的請求無法被處理。',
    'Invalid credentials.' => '登入憑證無效。',
    'Cookie has already been used by someone else.' => 'Cookie 已經被其他人使用。',
    'Not privileged to request the resource.' => '無權請求此資源。',
    'Invalid CSRF token.' => '無效的 CSRF token。',
    'No authentication provider found to support the authentication token.' => '找不到支援此 token 的身分驗證服務提供方。',
    'No session available, it either timed out or cookies are not enabled.' => '沒有工作階段，可能是超過時間，或者是未啟用 Cookies。',
    'No token could be found.' => '找不到 token。',
    'Username could not be found.' => '找不到使用者名稱。',
    'Account has expired.' => '帳號已經過期。',
    'Credentials have expired.' => '憑證已經過期。',
    'Account is disabled.' => '帳號已被停用。',
    'Account is locked.' => '帳號已被鎖定。',
    'Too many failed login attempts, please try again later.' => '登入失敗的次數過多，請稍後再試。',
    'Invalid or expired login link.' => '登入連結無效或過期。',
    'Too many failed login attempts, please try again in %minutes% minute.' => '登入失敗的次數過多，請 %minutes% 分鐘後再試。',
    'Too many failed login attempts, please try again in %minutes% minutes.' => '登入嘗試次數過多，請 %minutes% 分鐘後再試。',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.',
    'This value does not represent a valid week in the ISO 8601 format.' => 'This value does not represent a valid week in the ISO 8601 format.',
    'This value is not a valid week.' => 'This value is not a valid week.',
    'This value should not be before week "{{ min }}".' => 'This value should not be before week "{{ min }}".',
    'This value should not be after week "{{ max }}".' => 'This value should not be after week "{{ max }}".',
    'This value is not a valid slug.' => 'This value is not a valid slug.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'There was a problem validating your password reset request' => 'There was a problem validating your password reset request',
    'There was a problem handling your password reset request' => 'There was a problem handling your password reset request',
    'The link in your email is expired. Please try to reset your password again.' => 'The link in your email is expired. Please try to reset your password again.',
    'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.' => 'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.',
    'The reset password link is invalid. Please try to reset your password again.' => 'The reset password link is invalid. Please try to reset your password again.',
    'You have already requested a reset password email. Please check your email or try again soon.' => 'You have already requested a reset password email. Please check your email or try again soon.',
  ),
));
$catalogueZh->addFallbackCatalogue($catalogueEn);

return $catalogue;
