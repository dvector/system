<?php /*

  Copyright 2007-2009 The Habari Project <http://www.habariproject.org/>

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      http://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.

*/ ?>

	<div class="container">
		<p>
			<label for="<?php echo $id; ?>" class="incontent <?php echo $class; ?>"><?php echo $caption; ?></label>
			<input type="text" name="<?php echo $field; ?>" id="<?php echo $id; ?>" class="styledformelement text <?php echo $class; ?>" size="100%" value="<?php echo htmlspecialchars($value); ?>" <?php echo isset($tabindex) ? ' tabindex="' . $tabindex . '"' : ''?>>
		</p>
	<?php $control->errors_out('<li>%s</li>', '<ul class="error">%s</ul>'); ?>
	</div>
