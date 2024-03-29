<template>
    <div class="block">
        <el-form v-loading="loading"
                 element-loading-text="Loading..."
                 element-loading-spinner="el-icon-loading"
                 element-loading-background="rgba(0, 0, 0, 0.8)"
                 ref="form" :model="form" class="form-horizontal form-bordered">

            <div class="row">

                <div class="form-group">

                    <label class="col-md-2 control-label">{{ lang.name }} <span class="text-danger">*</span>:</label>
                    <div class="col-md-6">
                        <el-input class="el-input--is-round" maxlength="150" show-word-limit :disabled="loading"
                                  v-model="form.name"></el-input>
                    </div>

                </div>

                <div class="form-group">

                    <label class="col-md-2 control-label">{{ lang.email }} <span class="text-danger">*</span>:</label>
                    <div class="col-md-6">
                        <el-input class="el-input--is-round" maxlength="150" show-word-limit :disabled="loading"
                                  v-model="form.email"></el-input>
                    </div>

                </div>

                <div class="form-group">

                    <label class="col-md-2 control-label">{{ lang.password }} <span
                        class="text-danger">*</span>:</label>
                    <div class="col-md-6">
                        <el-input class="el-input--is-round" maxlength="150" show-word-limit :disabled="true"
                                  v-model="form.password"></el-input>
                    </div>
                    <div class="col-md-3">
                        <el-button type="warning" @click="generatePassword" :disabled="loading " style="margin: 0 1rem">
                            {{ lang.generate_password }}
                        </el-button>
                    </div>

                </div>

            </div>

            <div class="form-group">

                <label class="col-md-2 control-label">{{ lang.roles }} <span class="text-danger">*</span>:</label>

                <div class="col-md-9">

                    <el-transfer
                        :filter-placeholder="lang.select_role_placeholder"
                        style="text-align: left; display: inline-block"
                        v-model="form.roles"
                        filterable
                        :titles="[lang.select_roles, lang.selected_roles]"
                        :button-texts="[lang.role_remove, lang.role_add]"
                        :format="{ noChecked: '${total}', hasChecked: '${checked}/${total}'}"
                        :data="data">
                    </el-transfer>

                </div>

            </div>


            <div class="el-form-item registration-btn">
                <el-button type="primary" @click="save" :disabled="loading || !form.name || !form.email"
                           style="margin: 0 1rem">{{ lang.save_text }}
                </el-button>
            </div>
        </el-form>
    </div>
</template>

<style>
.el-transfer-panel {
    width: 387px;
}
</style>
<script>

import {getData} from "@/base/mixins/getData";
import {responseParse} from "@/base/mixins/responseParse";

export default {
    props: [
        'getSaveDataRoute',
        'user'
    ],

    data() {
        return {
            data: [],
            loading: false,
            lang: {},
            routes: {},
            options: {},

            /**
             * Form data
             */
            form: {
                guard_name: 'admin',
                password: ''
            },

        }
    },
    created() {
        this.getSaveData();
    },

    methods: {

        modifyCreateData() {

            this.options.roles.forEach((item) => {
                this.data.push({
                    key: item.id,
                    label: item.name
                });
            });

            this.form = {
                id: this.user ? this.user.id : '',
                name: this.user ? this.user.name : '',
                email: this.user ? this.user.email : '',
                iban: this.user ? this.user.iban : '',
                phone_number: this.user ? this.user.phone_number : '',
                surname: this.user ? this.user.surname : '',
                roles: this.user ? this.user.rolesId : [],
                identity_number: this.user ? this.user.identity_number : '',
                password: ''
            }

        },

        /**
         *
         * Get save data.
         *
         * @returns {Promise<void>}
         */
        async getSaveData() {

            this.loading = true;

            await getData({
                method: 'POST',
                url: this.getSaveDataRoute
            }).then(response => {
                // Parse response notification.
                responseParse(response, false);
                if (response.status == 200) {
                    // Response data.
                    let data = response.data.data;

                    this.lang = data.trans_text;
                    this.routes = data.routes;
                    this.options = data.options;

                    // Modify create data.
                    this.modifyCreateData();
                }
                this.loading = false
            })
        },

        async save() {

            this.loading = true;

            this.$confirm(this.lang.confirm_save, {
                confirmButtonText: this.lang.confirm_save_yes,
                cancelButtonText: this.lang.confirm_save_no,
                type: 'warning'
            })
                .then(async () => {

                    await getData({
                        method: 'POST',
                        url: this.routes.save,
                        data: this.form
                    }).then(response => {
                        // Parse response notification.
                        responseParse(response);
                        if (response.status == 200) {
                            window.location.reload();
                        }
                        this.loading = false
                    })

                }).catch(() => {
                this.loading = false;
            });
        },

        generatePassword() {
            let charactersArray = 'a-z,A-Z,0-9,#'.split(',');
            let CharacterSet = '';
            let password = '';

            if (charactersArray.indexOf('a-z') >= 0) {
                CharacterSet += 'abcdefghijklmnopqrstuvwxyz';
            }
            if (charactersArray.indexOf('A-Z') >= 0) {
                CharacterSet += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            }
            if (charactersArray.indexOf('0-9') >= 0) {
                CharacterSet += '0123456789';
            }

            for (let i = 0; i < 10; i++) {
                password += CharacterSet.charAt(Math.floor(Math.random() * CharacterSet.length));
            }

            this.form.password = password;
        },

        resetFields() {

        }

    }

}
</script>
