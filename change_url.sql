UPDATE wp2a_options
SET option_value = replace(option_value, 'https://website.com', 'http://localhost:8000')
WHERE option_name = 'home'
   OR option_name = 'siteurl';
UPDATE wp2a_posts
SET guid = replace(guid, 'https://website.com', 'http://localhost:8000');
UPDATE wp2a_posts
SET post_content = replace(post_content, 'https://website.com', 'http://localhost:8000');
UPDATE wp2a_postmeta
SET meta_value = replace(meta_value, 'https://website.com', 'http://localhost:8000');