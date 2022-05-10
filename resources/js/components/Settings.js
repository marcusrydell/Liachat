import React, { useEffect, useState, useRef, useContext } from "react";
import { Grid, Segment, Form, Input, Menu } from "semantic-ui-react";
import Pusher from "pusher-js";
import { ProgramContext } from "./ProgramContext";
import SettingsChannels from "./SettingsChannels";
import SettingsUsers from "./SettingsUsers";
import SettingsAssignments from "./Assignments";
import SettingsPings from "./SettingsPings";



function Settings(props) {
	const inputFile = useRef(null);
	const [file, setFile] = useState(undefined);
	const [tab, setTab] = useState('channels');
	const onButtonClick = () => {
		inputFile.current.click();
		console.log(inputFile.current.files);
	};

	const uploadFile = () => {
		console.log(file)
	};

	return (
		<div className="h-[100vh] align-top">
			<div className="text-l w-full pt-5 px-5 border-b-2">Settings</div>
			<div className="grid place-items-center mt-[100px]">
				<Menu pointing secondary inverted>
					<Menu.Item
						name='Channels'
						active={tab === 'channels'}
						onClick={() => setTab('channels')}
					/>
					<Menu.Item
						name='Users'
						active={tab === 'users'}
						onClick={() => setTab('users')}
					/>
					<Menu.Menu>
						<Menu.Item
							name='Pings'
							active={tab === 'pings'}
							onClick={() => setTab('pings')}
						/>
					</Menu.Menu>
				</Menu>
			</div>
			<div className="m-5">
				{tab === 'channels' &&
					<SettingsChannels />
				}
				{tab === 'users' &&
					<SettingsUsers />
				}
				{tab === 'pings' &&
					<SettingsPings />
				}
				<div className="flex flex-col m-0 p-0 overflow-auto h-[87vh] pb-5 overflow-auto">

				<Form>
					<Form.Field style={{ display: "none" }}>
						<input
							type="file"
							ref={inputFile}
							onChange={() => {
								setFile(inputFile.current.files[0]);
							}}
						/>
					</Form.Field>
					<Form.Button
						onClick={onButtonClick}
						color="green"
						content="Choose file"
					/>
					<p>{file ? file.name : ''}</p>
					<Form.Button
						onClick={uploadFile}
						color="green"
						content="Upload file"
						disabled={file === undefined}
					/>
				</Form>
						</div>
			</div>
		</div>
	);
}

export default Settings;
