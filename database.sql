USE [WebFitness]
GO
/****** Object:  Table [dbo].[Account]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Account](
	[AccountId] [int] NOT NULL,
	[Email] [varchar](100) NULL,
	[LoginTime] [datetime] NULL,
	[UserId] [int] NULL,
	[AccountStatus] [bit] NULL,
	[AccountLogin] [varchar](50) NULL,
	[AccountPassword] [varchar](50) NULL,
 CONSTRAINT [PK_Account] PRIMARY KEY CLUSTERED 
(
	[AccountId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Banner]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Banner](
	[BannerId] [int] NOT NULL,
	[BannerPicture] [varchar](100) NULL,
	[CreatedDate] [datetime] NULL CONSTRAINT [DF_Banner_CreatedDate]  DEFAULT (getdate()),
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
	[BannerStatus] [bit] NULL CONSTRAINT [DF_Banner_BannerStatus]  DEFAULT ((1)),
 CONSTRAINT [PK_Banner] PRIMARY KEY CLUSTERED 
(
	[BannerId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[BannerAddress]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[BannerAddress](
	[BannerAddressId] [int] IDENTITY(1,1) NOT NULL,
	[ProductCateId] [int] NULL,
	[BannerId] [int] NULL,
 CONSTRAINT [PK_BannerAddress] PRIMARY KEY CLUSTERED 
(
	[BannerAddressId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Class]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Class](
	[ClassId] [int] NOT NULL,
	[CourseId] [int] NULL,
	[PtId] [int] NULL,
	[AccountId] [int] NULL,
	[ClassSpeed] [int] NULL,
	[ClassStatus] [bit] NULL,
 CONSTRAINT [PK_Class] PRIMARY KEY CLUSTERED 
(
	[ClassId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Color]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Color](
	[ColorId] [nvarchar](10) NULL,
	[ColorTitle] [nvarchar](50) NULL,
	[ColorStatus] [bit] NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Comment]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Comment](
	[CommentId] [int] NOT NULL,
	[AccountId] [int] NULL,
	[ProductId] [int] NULL,
	[PostId] [int] NULL,
	[PtId] [int] NULL,
	[CourseId] [int] NULL,
	[CommentContent] [ntext] NULL,
	[Datetime] [datetime] NULL,
	[CommentStatus] [bit] NULL,
 CONSTRAINT [PK_Comment] PRIMARY KEY CLUSTERED 
(
	[CommentId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Course]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Course](
	[CourseId] [int] NOT NULL,
	[CourseAvatar] [varchar](150) NULL,
	[CourseTitle] [nvarchar](150) NULL,
	[CourseDesc] [ntext] NULL,
	[CourseDetail] [ntext] NULL,
	[CourseAlias] [varchar](150) NULL,
	[CoursePrice] [decimal](18, 0) NULL CONSTRAINT [DF_Course_CoursePrice]  DEFAULT ((0)),
	[CreatedDate] [datetime] NULL,
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
	[CourseStatus] [bit] NULL,
 CONSTRAINT [PK_Course] PRIMARY KEY CLUSTERED 
(
	[CourseId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Discount]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Discount](
	[DiscountId] [int] NOT NULL,
	[DiscountCode] [varchar](30) NULL,
	[DiscountPrice] [decimal](18, 0) NULL,
	[AccountId] [int] NULL,
	[MinimumPrice] [decimal](18, 0) NULL,
	[DiscountSituation] [nvarchar](50) NULL,
	[DiscountStatus] [bit] NULL,
	[CreatedDate] [datetime] NULL,
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
	[InvoiceId] [int] NULL,
 CONSTRAINT [PK_Discount] PRIMARY KEY CLUSTERED 
(
	[DiscountId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Invoice]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Invoice](
	[InvoiceId] [int] NOT NULL,
	[InvoiceTotal] [decimal](18, 0) NULL,
	[AccountId] [int] NULL,
	[InvoiceTime] [datetime] NULL,
	[AmountProduct] [int] NULL,
	[InvoiceSituation] [nvarchar](50) NULL,
	[InvoiceStatus] [bit] NULL,
	[InvoiceAddress] [nvarchar](200) NULL,
	[InvoiceReceiver] [nvarchar](150) NULL,
	[InvoicePhone] [varchar](15) NULL,
	[DiscountId] [int] NULL,
	[LastModified] [datetime] NULL,
 CONSTRAINT [PK_Invoice] PRIMARY KEY CLUSTERED 
(
	[InvoiceId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[InvoiceDetail]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[InvoiceDetail](
	[InvoiceDetailId] [int] NOT NULL,
	[InvoiceId] [int] NULL,
	[CourseId] [int] NULL,
	[ProductId] [int] NULL,
	[ProductPrice] [decimal](18, 0) NULL,
	[AmountProduct] [int] NULL,
 CONSTRAINT [PK_InvoiceDetail] PRIMARY KEY CLUSTERED 
(
	[InvoiceDetailId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Lesson]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Lesson](
	[LessonId] [int] NOT NULL,
	[LessonTitle] [nvarchar](500) NULL,
	[LessonAlias] [varchar](500) NULL,
	[LessonVideo] [varchar](150) NULL,
	[LessonDetail] [ntext] NULL,
	[Order] [int] NULL,
	[TableOfContentId] [int] NULL,
	[CreatedDate] [datetime] NULL,
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
	[LessonStatus] [bit] NULL,
 CONSTRAINT [PK_CourseDetail] PRIMARY KEY CLUSTERED 
(
	[LessonId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Post]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Post](
	[PostId] [int] NOT NULL,
	[PostTitle] [nvarchar](150) NULL,
	[PostAlias] [varchar](150) NULL,
	[PostCateId] [int] NULL,
	[PostView] [int] NULL,
	[PostStatus] [bit] NULL,
	[CreatedDate] [datetime] NULL,
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
	[PostDesc] [ntext] NULL,
	[PostDetail] [ntext] NULL,
	[PostAvatar] [varchar](100) NULL,
	[PostLike] [int] NULL,
 CONSTRAINT [PK_Post] PRIMARY KEY CLUSTERED 
(
	[PostId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PostCate]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PostCate](
	[PostCateId] [int] NOT NULL,
	[PostCateTitle] [nvarchar](150) NULL,
	[PostCateAlias] [varchar](150) NULL,
	[BannerId] [int] NULL,
 CONSTRAINT [PK_PostCate] PRIMARY KEY CLUSTERED 
(
	[PostCateId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Product]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Product](
	[ProductId] [int] NOT NULL,
	[ProductTitle] [nvarchar](150) NULL,
	[ProductAlias] [varchar](150) NULL,
	[ProductAvatar] [varchar](150) NULL,
	[ProductCateId] [int] NULL,
	[ProductPrice] [decimal](18, 0) NULL,
	[ProductPromo] [decimal](18, 0) NULL,
	[ProductDesc] [ntext] NULL,
	[ProductDetail] [ntext] NULL,
	[ProductView] [int] NULL,
	[ProductLike] [int] NULL,
	[ProductStatus] [bit] NULL,
	[CreatedDate] [datetime] NULL CONSTRAINT [DF_Product_CreatedDate]  DEFAULT (getdate()),
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
 CONSTRAINT [PK_Product] PRIMARY KEY CLUSTERED 
(
	[ProductId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ProductAttr]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ProductAttr](
	[ProductAttrId] [int] NULL,
	[ProductId] [int] NULL,
	[ColorId] [nvarchar](10) NULL,
	[SizeId] [nchar](5) NULL,
	[MoreImage] [varchar](max) NULL,
	[Amount] [int] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ProductCate]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ProductCate](
	[ProductCateId] [int] NOT NULL,
	[ProductCateTitle] [nvarchar](150) NULL,
	[ProductCateDesc] [ntext] NULL,
	[ProductAvatar] [nvarchar](150) NULL,
	[ProductCateAlias] [varchar](150) NULL,
	[CreatedDate] [datetime] NULL,
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
	[ProductCateStatus] [bit] NULL,
 CONSTRAINT [PK_ProductCate] PRIMARY KEY CLUSTERED 
(
	[ProductCateId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PT]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PT](
	[PtId] [int] NOT NULL,
	[PtFullName] [nvarchar](50) NULL,
	[PtAlias] [varchar](50) NULL,
	[PtAvatar] [varchar](150) NULL,
	[PtSex] [nvarchar](30) NULL,
	[PtBirthday] [date] NULL,
	[PtAbout] [ntext] NULL,
	[PtExperience] [int] NULL,
	[PtStatus] [bit] NULL,
	[CreatedDate] [datetime] NULL CONSTRAINT [DF_PT_CreatedDate]  DEFAULT (getdate()),
	[CreatedBy] [nvarchar](150) NULL,
	[ModifiedDate] [datetime] NULL,
	[MOdifiedBy] [nvarchar](150) NULL,
 CONSTRAINT [PK_PT] PRIMARY KEY CLUSTERED 
(
	[PtId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PtContact]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PtContact](
	[ContactId] [int] NOT NULL,
	[ContactTitle] [nvarchar](50) NULL,
	[ContactValue] [varchar](100) NULL,
	[PtId] [int] NULL,
 CONSTRAINT [PK_PtContact] PRIMARY KEY CLUSTERED 
(
	[ContactId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PtSkill]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[PtSkill](
	[SkillId] [int] NOT NULL,
	[SkillTitle] [nvarchar](150) NULL,
	[SkillValue] [int] NULL,
	[PtId] [int] NULL,
 CONSTRAINT [PK_PtSkill] PRIMARY KEY CLUSTERED 
(
	[SkillId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[PtTimeline]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[PtTimeline](
	[PtTimelineId] [int] NOT NULL,
	[PtTimelineTitle] [nvarchar](150) NULL,
	[PtTimelineTime] [date] NULL,
	[PtTimelineDecs] [ntext] NULL,
	[PtId] [int] NULL,
 CONSTRAINT [PK_PtTimeline] PRIMARY KEY CLUSTERED 
(
	[PtTimelineId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Rate]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Rate](
	[RateId] [int] NOT NULL,
	[AccountId] [int] NULL,
	[ProductId] [int] NULL,
	[PostId] [int] NULL,
	[PtId] [int] NULL,
	[CourseId] [int] NULL,
	[Value] [int] NULL,
 CONSTRAINT [PK_Rate] PRIMARY KEY CLUSTERED 
(
	[RateId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[SavePost]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[SavePost](
	[SavePostId] [int] NOT NULL,
	[PostId] [int] NULL,
	[PostTitle] [nvarchar](150) NULL,
	[PostAlias] [varchar](150) NULL,
	[PostCateId] [int] NULL,
	[PostStatus] [bit] NULL,
	[PostDesc] [ntext] NULL,
	[PostDetail] [ntext] NULL,
	[PostAvatar] [varchar](100) NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
 CONSTRAINT [PK_SavePost] PRIMARY KEY CLUSTERED 
(
	[SavePostId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[SaveProduct]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[SaveProduct](
	[SaveProductId] [int] NOT NULL,
	[ProductId] [int] NULL,
	[ProductTitle] [nvarchar](150) NULL,
	[ProductAlias] [varchar](150) NULL,
	[ProductAvatar] [varchar](150) NULL,
	[MoreImage] [varchar](max) NULL,
	[ProductCateId] [int] NULL,
	[ProductPrice] [decimal](18, 0) NULL,
	[ProductPromo] [decimal](18, 0) NULL,
	[ProductDetail] [ntext] NULL,
	[ProductStatus] [bit] NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
 CONSTRAINT [PK_SaveProduct] PRIMARY KEY CLUSTERED 
(
	[SaveProductId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[SaveProductCate]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[SaveProductCate](
	[SaveProductCateId] [int] NOT NULL,
	[ProductCateId] [int] NULL,
	[ProductCateTitle] [nvarchar](150) NULL,
	[ProductCateAlias] [varchar](150) NULL,
	[BannerId] [int] NULL,
	[ModifiedDate] [datetime] NULL,
	[ModifiedBy] [nvarchar](150) NULL,
	[ProductCateStatus] [bit] NULL,
 CONSTRAINT [PK_SaveProductCate] PRIMARY KEY CLUSTERED 
(
	[SaveProductCateId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Size]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Size](
	[SizeId] [nvarchar](50) NULL,
	[SizeStatus] [bit] NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[TableOfContent]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[TableOfContent](
	[TableOfContentId] [int] NULL,
	[TableOfContentTitle] [nvarchar](500) NULL,
	[Order] [int] NULL,
	[CouseId] [int] NULL,
	[CreatedDate] [datetime] NULL,
	[CreateBy] [int] NULL,
	[ModifedDate] [datetime] NULL,
	[ModifiedBy] [int] NULL,
	[Status] [bit] NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[User]    Script Date: 7/8/2020 10:12:06 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[User](
	[UserId] [int] NOT NULL,
	[UserFullName] [nvarchar](50) NULL,
	[UserAvatar] [varchar](150) NULL,
	[AccountId] [int] NULL,
	[UserAddress] [nvarchar](150) NULL,
	[UserPhone] [varchar](15) NULL,
	[UserAlias] [nvarchar](50) NULL,
	[UserSex] [nvarchar](30) NULL,
	[UserBirthdate] [date] NULL,
 CONSTRAINT [PK_User] PRIMARY KEY CLUSTERED 
(
	[UserId] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[Account] ([AccountId], [Email], [LoginTime], [UserId], [AccountStatus], [AccountLogin], [AccountPassword]) VALUES (1, N'phannam@gmail.com', NULL, NULL, 1, N'nam', N'123')
INSERT [dbo].[Account] ([AccountId], [Email], [LoginTime], [UserId], [AccountStatus], [AccountLogin], [AccountPassword]) VALUES (2, N'tranvu@gmail.com', NULL, NULL, 1, N'vu', N'123')
INSERT [dbo].[Account] ([AccountId], [Email], [LoginTime], [UserId], [AccountStatus], [AccountLogin], [AccountPassword]) VALUES (3, N'tranthinh@gmail.com', NULL, NULL, 1, N'thinh', N'123')
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (1, N'public/img/banners/banner1.jpg', NULL, NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (2, N'public/img/banners/banner2.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (3, N'public/img/banners/banner3.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (4, N'public/img/banners/banner4.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (5, N'public/img/banners/banner5.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (6, N'public/img/banners/banner6.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (7, N'public/img/banners/banner7.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (8, N'public/img/banners/banner8.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 1)
INSERT [dbo].[Banner] ([BannerId], [BannerPicture], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [BannerStatus]) VALUES (9, N'public/img/banners/banner8.jpg', CAST(N'2020-07-02 15:19:00.000' AS DateTime), NULL, NULL, NULL, 0)
SET IDENTITY_INSERT [dbo].[BannerAddress] ON 

INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (1, 1, 1)
INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (2, 1, 2)
INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (3, 1, 3)
INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (4, 1, 4)
INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (12, 2, 2)
INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (15, 2, 3)
INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (18, 2, 4)
INSERT [dbo].[BannerAddress] ([BannerAddressId], [ProductCateId], [BannerId]) VALUES (21, 2, 5)
SET IDENTITY_INSERT [dbo].[BannerAddress] OFF
INSERT [dbo].[Class] ([ClassId], [CourseId], [PtId], [AccountId], [ClassSpeed], [ClassStatus]) VALUES (1, 1, 1, 1, 10, 1)
INSERT [dbo].[Class] ([ClassId], [CourseId], [PtId], [AccountId], [ClassSpeed], [ClassStatus]) VALUES (2, 1, 1, 1, 7, 1)
INSERT [dbo].[Color] ([ColorId], [ColorTitle], [ColorStatus]) VALUES (N'FF0000', N'Red', 1)
INSERT [dbo].[Color] ([ColorId], [ColorTitle], [ColorStatus]) VALUES (N'FFF700', N'Yellow', 1)
INSERT [dbo].[Color] ([ColorId], [ColorTitle], [ColorStatus]) VALUES (N'04FF00', N'Green', 1)
INSERT [dbo].[Color] ([ColorId], [ColorTitle], [ColorStatus]) VALUES (N'0027FF', N'Blue', 1)
INSERT [dbo].[Color] ([ColorId], [ColorTitle], [ColorStatus]) VALUES (N'FF00B2', N'Violet', 1)
INSERT [dbo].[Color] ([ColorId], [ColorTitle], [ColorStatus]) VALUES (N'000000', N'Black', 1)
INSERT [dbo].[Color] ([ColorId], [ColorTitle], [ColorStatus]) VALUES (N'616161', N'Grey', 1)
INSERT [dbo].[Course] ([CourseId], [CourseAvatar], [CourseTitle], [CourseDesc], [CourseDetail], [CourseAlias], [CoursePrice], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [CourseStatus]) VALUES (1, N'public/img/course/course_woman_pt/course_woman_pt_avatar.jpg', N'Course Woman PT', N'Dessc', N'<p>Detail</p>', N'course-woman-pt', CAST(0 AS Decimal(18, 0)), CAST(N'2020-06-28 19:58:28.567' AS DateTime), N'', CAST(N'2020-06-28 19:58:28.567' AS DateTime), N'', 1)
INSERT [dbo].[Discount] ([DiscountId], [DiscountCode], [DiscountPrice], [AccountId], [MinimumPrice], [DiscountSituation], [DiscountStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [InvoiceId]) VALUES (1, N'NAMAN-AJASH-HJACH', CAST(20000 AS Decimal(18, 0)), 1, CAST(100000 AS Decimal(18, 0)), N'Used', 1, NULL, NULL, NULL, NULL, 1)
INSERT [dbo].[Discount] ([DiscountId], [DiscountCode], [DiscountPrice], [AccountId], [MinimumPrice], [DiscountSituation], [DiscountStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [InvoiceId]) VALUES (2, N'VUTRA-AJASH-HJACH', CAST(15000 AS Decimal(18, 0)), 2, CAST(100000 AS Decimal(18, 0)), N'Used', 1, NULL, NULL, NULL, NULL, 3)
INSERT [dbo].[Discount] ([DiscountId], [DiscountCode], [DiscountPrice], [AccountId], [MinimumPrice], [DiscountSituation], [DiscountStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [InvoiceId]) VALUES (3, N'THINH-AJASH-HJACH', CAST(30000 AS Decimal(18, 0)), 3, CAST(300000 AS Decimal(18, 0)), N'Not used yet', 1, NULL, NULL, NULL, NULL, NULL)
INSERT [dbo].[Discount] ([DiscountId], [DiscountCode], [DiscountPrice], [AccountId], [MinimumPrice], [DiscountSituation], [DiscountStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [InvoiceId]) VALUES (4, N'NAMAN-BJASH-HJACH', CAST(50000 AS Decimal(18, 0)), 1, CAST(500000 AS Decimal(18, 0)), N'Used', 1, NULL, NULL, NULL, NULL, 13)
INSERT [dbo].[Discount] ([DiscountId], [DiscountCode], [DiscountPrice], [AccountId], [MinimumPrice], [DiscountSituation], [DiscountStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [InvoiceId]) VALUES (5, N'VUTRA-BJASH-HJACH', CAST(15000 AS Decimal(18, 0)), 2, CAST(300000 AS Decimal(18, 0)), N'Not used yet', 1, NULL, NULL, NULL, NULL, NULL)
INSERT [dbo].[Discount] ([DiscountId], [DiscountCode], [DiscountPrice], [AccountId], [MinimumPrice], [DiscountSituation], [DiscountStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [InvoiceId]) VALUES (6, N'THINH-BJASH-HJACH', CAST(30000 AS Decimal(18, 0)), 3, CAST(100000 AS Decimal(18, 0)), N'Used', 1, NULL, NULL, NULL, NULL, 2)
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (1, CAST(280000 AS Decimal(18, 0)), 1, CAST(N'2020-06-01 00:00:00.000' AS DateTime), 2, N'Paid', 1, N'484 Lê Văn Việt', N'Phan Hoàng Nam', N'0123456789', 1, CAST(N'2020-06-02 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (2, CAST(150000 AS Decimal(18, 0)), 3, CAST(N'2020-05-30 00:00:00.000' AS DateTime), 1, N'Pending', 1, N'484 Lê Văn Việt', N'Trần Minh Thịnh', N'0123456789', NULL, CAST(N'2020-05-30 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (3, CAST(200000 AS Decimal(18, 0)), 2, CAST(N'2020-05-27 00:00:00.000' AS DateTime), 2, N'Pending', 1, N'Quận 9', N'Trần Lê Anh Vũ', N'0123456789', NULL, CAST(N'2020-05-30 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (4, CAST(50000 AS Decimal(18, 0)), 1, CAST(N'2020-06-04 00:00:00.000' AS DateTime), 2, N'Pending', 0, N'Quận 10', N'Phan Hoàng Nam', N'0123456789', NULL, CAST(N'2020-06-05 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (5, CAST(75000 AS Decimal(18, 0)), 3, CAST(N'2020-04-15 00:00:00.000' AS DateTime), 1, N'Pending', 0, N'Quận 4', N'Trần Minh Thịnh', N'0123456789', NULL, CAST(N'2020-04-30 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (6, CAST(350000 AS Decimal(18, 0)), 2, CAST(N'2020-06-04 00:00:00.000' AS DateTime), 5, N'Paid', 0, N'Quận 8', N'Trần Lê Anh Vũ', N'0123456789', NULL, CAST(N'2020-06-04 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (7, CAST(450000 AS Decimal(18, 0)), 1, CAST(N'2020-05-24 00:00:00.000' AS DateTime), 1, N'Paid', 0, N'Quận 7', N'Phan Hoàng Nam', N'0123456789', NULL, CAST(N'2020-05-30 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (8, CAST(120000 AS Decimal(18, 0)), 3, CAST(N'2020-04-02 00:00:00.000' AS DateTime), 1, N'Paid', 1, N'Quận 12', N'Trần Minh Thịnh', N'0123456789', NULL, CAST(N'2020-04-06 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (9, CAST(100000 AS Decimal(18, 0)), 2, CAST(N'2020-04-15 00:00:00.000' AS DateTime), 1, N'Paid', 1, N'Quận 11', N'Trần lê Anh Vũ', N'0123456789', NULL, CAST(N'2020-04-20 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (10, CAST(360000 AS Decimal(18, 0)), 1, CAST(N'2020-01-05 00:00:00.000' AS DateTime), 4, N'Pending', 1, N'Quận Thủ Đức', N'Phan Hoàng Nam', N'0123456789', NULL, CAST(N'2020-01-15 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (11, CAST(70000 AS Decimal(18, 0)), 3, CAST(N'2020-05-06 00:00:00.000' AS DateTime), 1, N'Pending', 0, N'Quận 1', N'Trần Minh Thịnh', N'0123456789', NULL, CAST(N'2020-05-08 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (12, CAST(180000 AS Decimal(18, 0)), 2, CAST(N'2020-06-02 00:00:00.000' AS DateTime), 2, N'Pending', 0, N'Quận 2', N'Trần Lê Anh vũ', N'0123456789', NULL, CAST(N'2020-06-02 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (13, CAST(720000 AS Decimal(18, 0)), 1, CAST(N'2020-06-05 00:00:00.000' AS DateTime), 1, N'Pending', 0, N'Quận Cam', N'Phan Hoàng Nam', N'0123456789', NULL, CAST(N'2020-06-05 00:00:00.000' AS DateTime))
INSERT [dbo].[Invoice] ([InvoiceId], [InvoiceTotal], [AccountId], [InvoiceTime], [AmountProduct], [InvoiceSituation], [InvoiceStatus], [InvoiceAddress], [InvoiceReceiver], [InvoicePhone], [DiscountId], [LastModified]) VALUES (14, CAST(500000 AS Decimal(18, 0)), 1, CAST(N'2020-05-30 00:00:00.000' AS DateTime), 5, N'Pending', 0, N'TP Sài Gòn', N'Phan Hoàng Nam', N'0123456789', NULL, CAST(N'2020-06-02 00:00:00.000' AS DateTime))
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (1, 1, NULL, 1, CAST(50000 AS Decimal(18, 0)), 2)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (2, 1, NULL, 5, CAST(100000 AS Decimal(18, 0)), 2)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (3, 2, NULL, 4, CAST(150000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (4, 3, NULL, 2, CAST(45000 AS Decimal(18, 0)), 2)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (5, 3, NULL, 3, CAST(110000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (6, 4, NULL, 3, CAST(30000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (7, 4, NULL, 2, CAST(20000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (8, 5, NULL, 1, CAST(75000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (9, 6, NULL, 1, CAST(50000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (10, 6, NULL, 2, CAST(50000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (11, 6, NULL, 3, CAST(30000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (12, 6, NULL, 4, CAST(120000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (13, 6, NULL, 5, CAST(100000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (14, 7, NULL, 4, CAST(150000 AS Decimal(18, 0)), 3)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (15, 8, NULL, 5, CAST(120000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (16, 9, NULL, 5, CAST(100000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (17, 10, NULL, 1, CAST(50000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (18, 10, NULL, 3, CAST(30000 AS Decimal(18, 0)), 3)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (19, 10, NULL, 4, CAST(120000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (20, 10, NULL, 5, CAST(100000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (21, 11, NULL, 1, CAST(70000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (22, 12, NULL, 1, CAST(60000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (23, 12, NULL, 4, CAST(120000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (24, 13, NULL, 4, CAST(120000 AS Decimal(18, 0)), 6)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (25, 14, NULL, 1, CAST(50000 AS Decimal(18, 0)), 2)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (26, 14, NULL, 2, CAST(45000 AS Decimal(18, 0)), 2)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (27, 14, NULL, 3, CAST(30000 AS Decimal(18, 0)), 3)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (28, 14, NULL, 4, CAST(120000 AS Decimal(18, 0)), 1)
INSERT [dbo].[InvoiceDetail] ([InvoiceDetailId], [InvoiceId], [CourseId], [ProductId], [ProductPrice], [AmountProduct]) VALUES (29, 14, NULL, 5, CAST(100000 AS Decimal(18, 0)), 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (1, N'Kỹ năng giới thiệu tên và dịch vụ huấn luyện', N'', N'public/img/course/course_woman_pt/videos/L1.mp4', N'<p>Lesson 1 - chapter 1</p>
<p>&nbsp;</p>', 0, 1, CAST(N'2020-06-28 19:58:28.573' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (2, N'Kỹ năng giao tiếp gây thiện cảm', N'', N'public/img/course/course_woman_pt/videos/L2.mp4', N'<p>Lesson 2 - chapter 1</p>
<p>&nbsp;</p>', 1, 1, CAST(N'2020-06-28 19:58:28.573' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (3, N'Quy trình dạy F1 (pro)', N'', N'public/img/course/course_woman_pt/videos/L3.mp4', N'<p>Lesson 1 - chapter 2</p>', 0, 2, CAST(N'2020-06-28 19:58:28.577' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (4, N'Quy trình dạy F2 (pro)', N'', N'public/img/course/course_woman_pt/videos/L4.mp4', N'<p>Lesson 2 - chapter 2</p>', 1, 2, CAST(N'2020-06-28 19:58:28.577' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (5, N'Mô hình ngôi nhà sức khỏe', N'', N'public/img/course/course_woman_pt/videos/L1.mp4', N'<p>Empty...........Leson 1 chapter 5</p>', 0, 5, CAST(N'2020-06-30 16:17:01.137' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (6, N'Qiu trình dạy F3', N'', N'public/img/course/course_woman_pt/videos/L2.mp4', N'<p>Empty...........Lesson 3 chapter 2</p>', 3, 2, CAST(N'2020-06-30 22:54:35.883' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (7, N'Dinh dưỡng trong tập luyện đối với cơ thể người bình thường', N'', N'public/img/course/course_woman_pt/videos/L4.mp4', N'<p>Lesson 2 chapter 5</p>', 2, 5, CAST(N'2020-06-30 23:00:20.387' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (8, N'Hệ vận động', N'', N'public/img/course/course_woman_pt/videos/L2.mp4', N'<p>Lesson 1 chapter 6</p>
<p>&nbsp;</p>', 1, 6, CAST(N'2020-06-30 23:00:20.393' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Lesson] ([LessonId], [LessonTitle], [LessonAlias], [LessonVideo], [LessonDetail], [Order], [TableOfContentId], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [LessonStatus]) VALUES (9, N'Khái niệm về thể hình & Fitness, tập tạ', N'', N'public/img/course/course_woman_pt/videos/L3.mp4', N'<p>Lesson 1 chapter 7</p>', 1, 7, CAST(N'2020-06-30 23:03:34.693' AS DateTime), N'', NULL, N'', 1)
INSERT [dbo].[Product] ([ProductId], [ProductTitle], [ProductAlias], [ProductAvatar], [ProductCateId], [ProductPrice], [ProductPromo], [ProductDesc], [ProductDetail], [ProductView], [ProductLike], [ProductStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy]) VALUES (1, N'Women', N'women', N'public/img/products/women/slide2.jpg', 1, CAST(150000 AS Decimal(18, 0)), CAST(0 AS Decimal(18, 0)), N'Woman Fashion', N'<div>
<h1>ok</h1>
</div>', 0, 0, 1, CAST(N'2020-07-05 21:38:06.200' AS DateTime), N'', CAST(N'2020-07-05 21:38:06.200' AS DateTime), N'')
INSERT [dbo].[ProductAttr] ([ProductAttrId], [ProductId], [ColorId], [SizeId], [MoreImage], [Amount]) VALUES (1, 1, N'FF0000', N'X    ', N'[public/img/products/women/slide1.jpg, public/img/products/women/slide2.jpg, public/img/products/women/slide3.jpg, public/img/products/women/slide4.jpg, ]', 0)
INSERT [dbo].[ProductCate] ([ProductCateId], [ProductCateTitle], [ProductCateDesc], [ProductAvatar], [ProductCateAlias], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [ProductCateStatus]) VALUES (1, N'Man Fashion', N'Man Fashion', N'public/img/product_cate/Man_Fashion.jpg', N'man-fashion', CAST(N'2020-07-02 22:50:08.830' AS DateTime), N'', CAST(N'2020-07-02 22:50:08.830' AS DateTime), N'', 1)
INSERT [dbo].[ProductCate] ([ProductCateId], [ProductCateTitle], [ProductCateDesc], [ProductAvatar], [ProductCateAlias], [CreatedDate], [CreatedBy], [ModifiedDate], [ModifiedBy], [ProductCateStatus]) VALUES (2, N'Woman Fashion', N'Woman Fashion', N'public/img/product_cate/Man_Fashion.jpg', N'woman-fashion', CAST(N'2020-07-08 01:04:13.327' AS DateTime), N'', CAST(N'2020-07-08 09:33:16.387' AS DateTime), N'', 1)
INSERT [dbo].[PT] ([PtId], [PtFullName], [PtAlias], [PtAvatar], [PtSex], [PtBirthday], [PtAbout], [PtExperience], [PtStatus], [CreatedDate], [CreatedBy], [ModifiedDate], [MOdifiedBy]) VALUES (1, N'Chihoo Hwang', N'chihoo-hwang', N'public/img/dashboard/rakhan-potik-1.jpg', N'Male', CAST(N'1996-02-02' AS Date), N'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>', 3, 1, CAST(N'2020-06-10 09:32:42.943' AS DateTime), NULL, NULL, NULL)
INSERT [dbo].[PtContact] ([ContactId], [ContactTitle], [ContactValue], [PtId]) VALUES (1, N'Phone Number', N'0377670509', 1)
INSERT [dbo].[PtContact] ([ContactId], [ContactTitle], [ContactValue], [PtId]) VALUES (2, N'Email Address', N'tranleanhvudpqn123@gmail.com', 1)
INSERT [dbo].[PtContact] ([ContactId], [ContactTitle], [ContactValue], [PtId]) VALUES (3, N'Facebook Link', N'https://www.facebook.com/profile.php?id=100012146175130', 1)
INSERT [dbo].[PtSkill] ([SkillId], [SkillTitle], [SkillValue], [PtId]) VALUES (1, N'Web Design', 80, 1)
INSERT [dbo].[PtSkill] ([SkillId], [SkillTitle], [SkillValue], [PtId]) VALUES (2, N'Development', 83, 1)
INSERT [dbo].[PtSkill] ([SkillId], [SkillTitle], [SkillValue], [PtId]) VALUES (3, N'Brand Design', 60, 1)
INSERT [dbo].[PtSkill] ([SkillId], [SkillTitle], [SkillValue], [PtId]) VALUES (4, N'Adobe', 90, 1)
INSERT [dbo].[PtSkill] ([SkillId], [SkillTitle], [SkillValue], [PtId]) VALUES (5, N'Interface Design', 78, 1)
INSERT [dbo].[PtSkill] ([SkillId], [SkillTitle], [SkillValue], [PtId]) VALUES (6, N'Illustration', 97, 1)
INSERT [dbo].[PtTimeline] ([PtTimelineId], [PtTimelineTitle], [PtTimelineTime], [PtTimelineDecs], [PtId]) VALUES (1, N'Computer Science Degree', CAST(N'2018-01-01' AS Date), N'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....', 1)
INSERT [dbo].[PtTimeline] ([PtTimelineId], [PtTimelineTitle], [PtTimelineTime], [PtTimelineDecs], [PtId]) VALUES (2, N'Landed first Job', CAST(N'2019-01-01' AS Date), N'Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...', 1)
INSERT [dbo].[PtTimeline] ([PtTimelineId], [PtTimelineTitle], [PtTimelineTime], [PtTimelineDecs], [PtId]) VALUES (3, N'
Started my own Company', CAST(N'2020-01-01' AS Date), N'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....', 1)
INSERT [dbo].[Rate] ([RateId], [AccountId], [ProductId], [PostId], [PtId], [CourseId], [Value]) VALUES (1, 1, NULL, NULL, 1, NULL, 5)
INSERT [dbo].[Rate] ([RateId], [AccountId], [ProductId], [PostId], [PtId], [CourseId], [Value]) VALUES (2, 2, NULL, NULL, 1, NULL, 3)
INSERT [dbo].[Rate] ([RateId], [AccountId], [ProductId], [PostId], [PtId], [CourseId], [Value]) VALUES (3, 4, NULL, NULL, 1, NULL, 4)
INSERT [dbo].[Rate] ([RateId], [AccountId], [ProductId], [PostId], [PtId], [CourseId], [Value]) VALUES (4, 3, NULL, NULL, 1, NULL, 5)
INSERT [dbo].[Size] ([SizeId], [SizeStatus]) VALUES (N'X', 1)
INSERT [dbo].[Size] ([SizeId], [SizeStatus]) VALUES (N'M', 1)
INSERT [dbo].[Size] ([SizeId], [SizeStatus]) VALUES (N'L', 1)
INSERT [dbo].[Size] ([SizeId], [SizeStatus]) VALUES (N'XL', 1)
INSERT [dbo].[TableOfContent] ([TableOfContentId], [TableOfContentTitle], [Order], [CouseId], [CreatedDate], [CreateBy], [ModifedDate], [ModifiedBy], [Status]) VALUES (1, N'Các kỹ năng cần thiết đối với PT căn bản', 0, 1, CAST(N'2020-06-28 19:58:28.570' AS DateTime), NULL, CAST(N'2020-06-28 19:58:28.570' AS DateTime), NULL, 1)
INSERT [dbo].[TableOfContent] ([TableOfContentId], [TableOfContentTitle], [Order], [CouseId], [CreatedDate], [CreateBy], [ModifedDate], [ModifiedBy], [Status]) VALUES (2, N'Quy trình huấn luyện của PT chuyên nghiệp', 1, 1, CAST(N'2020-06-28 19:58:28.573' AS DateTime), NULL, CAST(N'2020-06-28 19:58:28.573' AS DateTime), NULL, 1)
INSERT [dbo].[TableOfContent] ([TableOfContentId], [TableOfContentTitle], [Order], [CouseId], [CreatedDate], [CreateBy], [ModifedDate], [ModifiedBy], [Status]) VALUES (3, N'Xử lý tình huống chấn thương trong tập luyện', 3, 1, CAST(N'2020-06-30 16:05:53.493' AS DateTime), NULL, CAST(N'2020-06-30 16:05:53.493' AS DateTime), NULL, 1)
INSERT [dbo].[TableOfContent] ([TableOfContentId], [TableOfContentTitle], [Order], [CouseId], [CreatedDate], [CreateBy], [ModifedDate], [ModifiedBy], [Status]) VALUES (4, N'Tìm hiểu các loại bệnh và phương pháp tập luyện', 4, 1, CAST(N'2020-06-30 16:08:40.740' AS DateTime), NULL, CAST(N'2020-06-30 16:08:40.740' AS DateTime), NULL, 1)
INSERT [dbo].[TableOfContent] ([TableOfContentId], [TableOfContentTitle], [Order], [CouseId], [CreatedDate], [CreateBy], [ModifedDate], [ModifiedBy], [Status]) VALUES (5, N'Dinh dưỡng trong huấn luyện', 5, 1, CAST(N'2020-06-30 16:17:01.133' AS DateTime), NULL, CAST(N'2020-06-30 16:17:01.133' AS DateTime), NULL, 1)
INSERT [dbo].[TableOfContent] ([TableOfContentId], [TableOfContentTitle], [Order], [CouseId], [CreatedDate], [CreateBy], [ModifedDate], [ModifiedBy], [Status]) VALUES (6, N'Giải phẫu về cơ thể người', 6, 1, CAST(N'2020-06-30 23:00:20.390' AS DateTime), NULL, CAST(N'2020-06-30 23:00:20.390' AS DateTime), NULL, 1)
INSERT [dbo].[TableOfContent] ([TableOfContentId], [TableOfContentTitle], [Order], [CouseId], [CreatedDate], [CreateBy], [ModifedDate], [ModifiedBy], [Status]) VALUES (7, N'Chuyên đề huấn luyện thể hình & Fitness', 7, 1, CAST(N'2020-06-30 23:03:34.690' AS DateTime), NULL, CAST(N'2020-06-30 23:03:34.690' AS DateTime), NULL, 1)
INSERT [dbo].[User] ([UserId], [UserFullName], [UserAvatar], [AccountId], [UserAddress], [UserPhone], [UserAlias], [UserSex], [UserBirthdate]) VALUES (1, N'Phan Hoàng Nam', NULL, 1, N'Quận 9', N'0123456789', NULL, N'Nam', CAST(N'1999-11-18' AS Date))
INSERT [dbo].[User] ([UserId], [UserFullName], [UserAvatar], [AccountId], [UserAddress], [UserPhone], [UserAlias], [UserSex], [UserBirthdate]) VALUES (2, N'Trần Lê Anh Vũ', NULL, 2, N'Quận 9', N'0147852369', NULL, N'Nam', CAST(N'1999-01-01' AS Date))
INSERT [dbo].[User] ([UserId], [UserFullName], [UserAvatar], [AccountId], [UserAddress], [UserPhone], [UserAlias], [UserSex], [UserBirthdate]) VALUES (3, N'Trần Minh Thịnh', NULL, 3, N'Quận Thủ Đức', N'0246813579', NULL, N'Nam', CAST(N'1999-01-01' AS Date))
