<v-toolbar fixed class="white">
    <v-toolbar-title class="hidden-sm-and-down">
        <v-btn primary flat href="{{ route('home.index') }}">{{ config('app.name') }}</v-btn>
    </v-toolbar-title>

    <v-breadcrumbs icons divider="forward" class="hidden-md-and-down">
        <v-breadcrumbs-item v-for="(segment, i) in paths" :key="i">
            <a :href="segment.split('/').length !== 3 ? segment : null">@{{ _.last(segment.split('/')) }}</a>
        </v-breadcrumbs-item>
    </v-breadcrumbs>

    <v-spacer></v-spacer>

    <v-btn flat href="{{ route('docs.index') }}">
        <v-icon>mdi-book-open-page-variant</v-icon>
        <span class="hidden-md-and-down">documentation</span>
    </v-btn>

    <v-btn
            flat
            href="https://github.com/hyn/multi-tenant" target="_blank"
            v-tooltip:left="{ html: 'Checkout the source code' }"
    >
        <v-icon>mdi-github-face</v-icon>
        <span class="hidden-md-and-down">GitHub</span>
    </v-btn>

    @if(config('newsletter.subscribe-link'))
        <v-btn
                flat
                href="{{ route('newsletter.signup') }}" target="_blank"
                v-tooltip:left="{ html: 'Stay tuned, subscribe to the newsletter' }"
        >
            <v-icon>mdi-email-alert</v-icon>
            <span class="hidden-md-and-down">newsletter</span>
        </v-btn>
    @endif

    @if(config('discord.invite-link'))
        <v-btn
            flat
            href="{{ route('chat') }}" target="_blank"
            v-tooltip:left="{ html: 'Join the chat on Discord' }"
        >
            <v-icon>mdi-discord</v-icon>
            <span class="hidden-md-and-down">chat</span>
        </v-btn>
    @endif
</v-toolbar>