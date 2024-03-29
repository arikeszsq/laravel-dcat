<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection authors
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection imported
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection require
     * @property Grid\Column|Collection require_dev
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection img
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection gp_id
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection time
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection add_price
     * @property Grid\Column|Collection now_price
     * @property Grid\Column|Collection bak
     * @property Grid\Column|Collection is_right
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection start_price
     * @property Grid\Column|Collection end_price
     * @property Grid\Column|Collection change_hand
     * @property Grid\Column|Collection qrr
     * @property Grid\Column|Collection out_num
     * @property Grid\Column|Collection in_num
     * @property Grid\Column|Collection deal_num
     * @property Grid\Column|Collection avg
     * @property Grid\Column|Collection max_price
     * @property Grid\Column|Collection min_price
     * @property Grid\Column|Collection 20_day
     * @property Grid\Column|Collection 60_day
     * @property Grid\Column|Collection main_out
     * @property Grid\Column|Collection 7_avg
     * @property Grid\Column|Collection 10_avg
     * @property Grid\Column|Collection 15_gvg
     * @property Grid\Column|Collection 20_avg
     * @property Grid\Column|Collection 25_avg
     * @property Grid\Column|Collection 30_avg
     * @property Grid\Column|Collection gap
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection deleted_at
     *
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection authors(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection imported(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection require(string $label = null)
     * @method Grid\Column|Collection require_dev(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection img(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection gp_id(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection time(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection add_price(string $label = null)
     * @method Grid\Column|Collection now_price(string $label = null)
     * @method Grid\Column|Collection bak(string $label = null)
     * @method Grid\Column|Collection is_right(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection start_price(string $label = null)
     * @method Grid\Column|Collection end_price(string $label = null)
     * @method Grid\Column|Collection change_hand(string $label = null)
     * @method Grid\Column|Collection qrr(string $label = null)
     * @method Grid\Column|Collection out_num(string $label = null)
     * @method Grid\Column|Collection in_num(string $label = null)
     * @method Grid\Column|Collection deal_num(string $label = null)
     * @method Grid\Column|Collection avg(string $label = null)
     * @method Grid\Column|Collection max_price(string $label = null)
     * @method Grid\Column|Collection min_price(string $label = null)
     * @method Grid\Column|Collection 20_day(string $label = null)
     * @method Grid\Column|Collection 60_day(string $label = null)
     * @method Grid\Column|Collection main_out(string $label = null)
     * @method Grid\Column|Collection 7_avg(string $label = null)
     * @method Grid\Column|Collection 10_avg(string $label = null)
     * @method Grid\Column|Collection 15_gvg(string $label = null)
     * @method Grid\Column|Collection 20_avg(string $label = null)
     * @method Grid\Column|Collection 25_avg(string $label = null)
     * @method Grid\Column|Collection 30_avg(string $label = null)
     * @method Grid\Column|Collection gap(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection name
     * @property Show\Field|Collection version
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection authors
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection imported
     * @property Show\Field|Collection config
     * @property Show\Field|Collection require
     * @property Show\Field|Collection require_dev
     * @property Show\Field|Collection id
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection path
     * @property Show\Field|Collection method
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection content
     * @property Show\Field|Collection img
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection gp_id
     * @property Show\Field|Collection type
     * @property Show\Field|Collection num
     * @property Show\Field|Collection price
     * @property Show\Field|Collection time
     * @property Show\Field|Collection code
     * @property Show\Field|Collection add_price
     * @property Show\Field|Collection now_price
     * @property Show\Field|Collection bak
     * @property Show\Field|Collection is_right
     * @property Show\Field|Collection status
     * @property Show\Field|Collection start_price
     * @property Show\Field|Collection end_price
     * @property Show\Field|Collection change_hand
     * @property Show\Field|Collection qrr
     * @property Show\Field|Collection out_num
     * @property Show\Field|Collection in_num
     * @property Show\Field|Collection deal_num
     * @property Show\Field|Collection avg
     * @property Show\Field|Collection max_price
     * @property Show\Field|Collection min_price
     * @property Show\Field|Collection 20_day
     * @property Show\Field|Collection 60_day
     * @property Show\Field|Collection main_out
     * @property Show\Field|Collection 7_avg
     * @property Show\Field|Collection 10_avg
     * @property Show\Field|Collection 15_gvg
     * @property Show\Field|Collection 20_avg
     * @property Show\Field|Collection 25_avg
     * @property Show\Field|Collection 30_avg
     * @property Show\Field|Collection gap
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection deleted_at
     *
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection authors(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection imported(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection require(string $label = null)
     * @method Show\Field|Collection require_dev(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection img(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection gp_id(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection time(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection add_price(string $label = null)
     * @method Show\Field|Collection now_price(string $label = null)
     * @method Show\Field|Collection bak(string $label = null)
     * @method Show\Field|Collection is_right(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection start_price(string $label = null)
     * @method Show\Field|Collection end_price(string $label = null)
     * @method Show\Field|Collection change_hand(string $label = null)
     * @method Show\Field|Collection qrr(string $label = null)
     * @method Show\Field|Collection out_num(string $label = null)
     * @method Show\Field|Collection in_num(string $label = null)
     * @method Show\Field|Collection deal_num(string $label = null)
     * @method Show\Field|Collection avg(string $label = null)
     * @method Show\Field|Collection max_price(string $label = null)
     * @method Show\Field|Collection min_price(string $label = null)
     * @method Show\Field|Collection 20_day(string $label = null)
     * @method Show\Field|Collection 60_day(string $label = null)
     * @method Show\Field|Collection main_out(string $label = null)
     * @method Show\Field|Collection 7_avg(string $label = null)
     * @method Show\Field|Collection 10_avg(string $label = null)
     * @method Show\Field|Collection 15_gvg(string $label = null)
     * @method Show\Field|Collection 20_avg(string $label = null)
     * @method Show\Field|Collection 25_avg(string $label = null)
     * @method Show\Field|Collection 30_avg(string $label = null)
     * @method Show\Field|Collection gap(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
