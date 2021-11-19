# 使用 CakeSkin 登录
当您想使用 CakeSkin 登录皮肤站时，可以使用本插件能让现有用户进行这样的操作。

## 使用方法

本插件没有配置页面，所有配置通过修改 `.env` 来进行。

1. 在 `https://skin.cakemc.top/user/oauth/manage` 创建 OAuth 2 应用
2. 增加三条配置项，`CAKESKIN_KEY`、 `CAKESKIN_SECRET`、 `CAKESKIN_REDIRECT_URI`
3. 将 `客户端 ID`、`客户端 Secret`、`回调 URL` 分别填入  `CAKESKIN_KEY`、 `CAKESKIN_SECRET`、 `CAKESKIN_REDIRECT_URI`

## 示例

```
CAKESKIN_KEY=1
CAKESKIN_SECRET=khGoXUMPZvhT8qNQi3PECK8BDokyfNne
CAKESKIN_REDIRECT_URI=https://skin.bs-community.dev/auth/login/littleskin/callback
```
