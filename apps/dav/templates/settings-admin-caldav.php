<?php
/**
 * @copyright 2017, Georg Ehrke <oc.list@georgehrke.com>
 *
 * @author Georg Ehrke <oc.list@georgehrke.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

script('dav', [
	'settings-admin-caldav'
]);

/** @var \OCP\IL10N $l */
/** @var array $_ */
?>
<form id="CalDAV" class="section">
	<h2><?php p($l->t('CalDAV server')); ?></h2>
	<p>
		<input type="checkbox" name="caldav_send_invitations" id="caldavSendInvitations" class="checkbox"
			<?php ($_['send_invitations'] === 'yes') ? print_unescaped('checked="checked"') : null ?>/>
		<label for="caldavSendInvitations"><?php p($l->t('Send invitations to attendees')); ?></label>
		<br>
		<em><?php p($l->t('Please make sure to properly set up the email settings above.')); ?></em>
	</p>
</form>
