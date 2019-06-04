<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
/**
 * ECJIA 管理员信息以及权限管理程序
 */
defined('IN_ECJIA') or exit('No permission resources.');

class admin_privilege extends ecjia_admin
{

    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();

        RC_Style::enqueue_style('chosen');
        RC_Style::enqueue_style('uniform-aristo');

        RC_Script::enqueue_script('smoke');
        RC_Script::enqueue_script('jquery-form');
        RC_Script::enqueue_script('jquery-chosen');
        RC_Script::enqueue_script('jquery-uniform');
        RC_Script::enqueue_script('jquery-validate');

        RC_Script::enqueue_script('ecjia-admin_privilege');

        ecjia_screen::get_current_screen()->add_nav_here(new admin_nav_here(__('管理员管理', 'platform'), RC_Uri::url('@admin_user/init')));
    }

    /**
     * 为管理员分配权限
     */
    public function allot()
    {
        $this->admin_priv('allot_priv');

        $userid = $this->request->query('id');
        if ($_SESSION['admin_id'] == $userid) {
            $this->admin_priv('all');
        }

        ecjia_screen::get_current_screen()->add_nav_here(new admin_nav_here(__('分派权限', 'platform')));
        ecjia_screen::get_current_screen()->add_option('current_code', 'platform_privilege_menu');

        /* 获得该管理员的权限 */
        $user      = new Ecjia\System\Admins\Users\AdminUser($userid, '\Ecjia\App\Platform\Frameworks\Users\AdminUserAllotPurview');
        $user_name = $user->getUserName();
        $priv_str  = $user->getActionList();

        /* 如果被编辑的管理员拥有了all这个权限，将不能编辑 */
        if ($priv_str == 'all') {
            $links = ecjia_alert_links([
                'text' => __('返回管理员列表', 'platform'),
                'href' => RC_Uri::url('@admin_user/init'),
            ]);
            return $this->showmessage(__('您不能对此管理员的权限进行任何操作！', 'platform'), ecjia::MSGTYPE_HTML | ecjia::MSGSTAT_ERROR, array('links' => $links));
        }

        $priv_group = \Ecjia\App\Platform\Frameworks\Component\Purview::load_purview($priv_str);

        /* 赋值 */
        $this->assign('ur_here', sprintf(__('分派公众平台权限 [ %s ] ', 'platform'), $user_name));
        $this->assign('action_link', array('href' => RC_Uri::url('@admin_user/init'), 'text' => __('管理员列表', 'platform')));
        $this->assign('priv_group', $priv_group);
        $this->assign('user_id', $userid);

        /* 显示页面 */
        $this->assign('form_action', RC_Uri::url('platform/admin_privilege/update_allot'));

        return $this->display('privilege_allot.dwt');
    }

    /**
     * 更新管理员的权限
     */
    public function update_allot()
    {
        $this->admin_priv('admin_manage');

        $userid = $this->request->input('id');
        /* 取得当前管理员用户名 */
        $user      = new Ecjia\System\Admins\Users\AdminUser($userid, '\Ecjia\App\Platform\Frameworks\Users\AdminUserAllotPurview');
        $user_name = $user->getUserName();

        /* 更新管理员的权限 */
        $act_list = join(',', $_POST['action_code']);

        $user->setActionList($act_list);

        /* 记录管理员操作 */
        ecjia_admin::admin_log(addslashes($user_name), 'edit', 'privilege');
        /* 提示信息 */
        $links = ecjia_alert_links([
            'text' => __('返回管理员列表', 'platform'),
            'href' => RC_Uri::url('@admin_user/init'),
        ]);
        return $this->showmessage(sprintf(__('编辑 %s 操作成功！', 'platform'), $user_name), ecjia::MSGTYPE_JSON | ecjia::MSGSTAT_SUCCESS, array('links' => $links));
    }

}

// end
