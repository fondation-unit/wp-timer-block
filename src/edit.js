/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.sass';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const { timerDuration } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Settings', 'timer-block')}>
					<TextControl
						label={__(
							'Timer duration',
							'timer-block'
						)}
						value={timerDuration || ''}
						onChange={(value) =>
							setAttributes({ timerDuration: value })
						}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<div class="wp-block-timer-block">
					<div class="timer-block-body">
						<div class="circle">
							<svg>
								<circle cx="70" cy="70" r="60"></circle>
								<circle cx="70" cy="70" r="60" id="timerseconds" class=""></circle>
							</svg>
							<div id="seconds"></div>
						</div>
					</div>
				</div>
			</div>
		</>
	);
}
