# Nested

Proof of concept more than anything else... 

This module extends the channel:entries tag to allow nested access to the channel module with var_prefixes on nested variables.

## Example

	{exp:channel:entries entry_id="1" dynamic="off"}
	
		<h1>{title} {entry_id}</h1>
	
		{exp:nested:prep_vars var_prefix="nested_"}
			{exp:nested:entries entry_id="2" dynamic="off"}
				{nested_title} {nested_entry_id}
			{/exp:nested:entries}
		{/exp:nested:prep_vars}
	
	{/exp:channel:entries}

